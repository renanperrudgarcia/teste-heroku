<?php

declare(strict_types=1);

namespace App\Cliente\Domain\Factory;

use App\Cliente\Domain\Cliente;
use DateTimeImmutable;

final class ClienteFactory
{
    public static function create(array $values = [])
    {
        $cliente = new Cliente();
        $cliente->setCreatedAt(new DateTimeImmutable());
        $cliente->setEndedAt(new DateTimeImmutable());

        if (empty($values)) {
            return $cliente;
        }

        if (isset($values['id'])) {
            $values['id'] = (int)$values['id'];
        }

        if (isset($values['created_at'])) {
            $values['created_at'] = new DateTimeImmutable($values['created_at']);
        }

        if (isset($values['endedAt'])) {
            $values['endedAt'] = new DateTimeImmutable($values['endedAt']);
        }

        if (isset($values['name'])) {
            $cliente->setName($values['name']);
            unset($values['name']);
        }

        if (isset($values['cnpj'])) {
            $cliente->setCnpj($values['cnpj']);
            unset($values['cnpj']);
        }

        if (isset($values['idtipopessoa'])) {
            $cliente->setIdtipopessoa($values['idtipopessoa']);
            unset($values['idtipopessoa']);
        }

        if (isset($values['idtipocontribuinte'])) {
            $cliente->setIdtipocontribuinte($values['idtipocontribuinte']);
            unset($values['idtipocontribuinte']);
        }

        $cliente->fill($values);

        return $cliente;
    }
}
