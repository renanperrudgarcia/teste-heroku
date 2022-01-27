<?php

declare(strict_types=1);

namespace App\Cliente\Domain\ValueObjects;

use DomainException;

final class Cnpj
{
    private string $cnpj;

    public function __construct(string $cnpj)
    {
        if (!$this->validarCnpj($cnpj)) {
            throw new DomainException('CNPJ is not valid');
        }

        $this->cnpj = $cnpj;
    }

    public function validarCnpj(string $cnpj)
    {
        $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);

        // Valida tamanho
        if (strlen($cnpj) != 14) {
            return false;
        }

        // Verifica se todos os digitos são iguais
        if (preg_match('/(\d)\1{13}/', $cnpj)) {
            return false;
        }

        // Valida primeiro dígito verificador
        for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        if ($cnpj[12] != ($resto < 2 ? 0 : 11 - $resto)) {
            return false;
        }

        // Valida segundo dígito verificador
        for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
            $soma += $cnpj[$i] * $j;
            $j = ($j == 2) ? 9 : $j - 1;
        }

        $resto = $soma % 11;

        return $cnpj[13] == ($resto < 2 ? 0 : 11 - $resto);
    }


    public function __toString(): string
    {
        return $this->cnpj;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }
}
