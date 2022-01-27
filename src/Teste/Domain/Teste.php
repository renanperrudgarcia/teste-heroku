<?php

declare(strict_types=1);

namespace App\Teste\Domain;

use App\Shared\Domain\Entity;
use App\Teste\Domain\ValueObjects\Descricao;

final class Teste extends Entity
{
    protected string $descricao;
    protected $numberOne;
    protected $numberTwo;

    public function validaDescricao(): string
    {
        if (strlen($this->descricao) < 2) {
            return "Descrição precisa ter pelo menos 2 letras";
        }

        return 'Validado com sucesso';
    }

    public function existeNumerosNegativos()
    {
        if ($this->numberOne < 0 || $this->numberTwo < 0) {
            return "Não pode ter números negativos";
        }

        return "Está validado";
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): Teste
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getNumberTwo(): int
    {
        return $this->numberTwo;
    }

    public function setNumberTwo($numberTwo): Teste
    {
        $this->numberTwo = $numberTwo;

        return $this;
    }

    public function getNumberOne(): int
    {
        return $this->numberOne;
    }

    public function setNumberOne($numberOne): Teste
    {
        $this->numberOne = $numberOne;

        return $this;
    }
}
