<?php

declare(strict_types=1);

namespace App\Cliente\Adapters\Repositories;

use App\Cliente\UseCases\Cliente\InputBoundary;
use App\Cliente\UseCases\Cliente\OutputBoundary;
use App\Cliente\Domain\Cliente;
use App\Cliente\Domain\Exceptions\ClienteNotFoundException;
use App\Cliente\Domain\Exceptions\ClienteExistingException;
use App\Cliente\UseCases\Contracts\ClienteRepository as ClienteRepositoryInterface;
use App\Cliente\Domain\Factory\ClienteFactory;
use App\Shared\Adapters\Contracts\DatabaseDriver;
use App\Shared\Adapters\Contracts\QueryBuilder\InsertStatement;
use App\Shared\Adapters\Contracts\QueryBuilder\SelectStatement;
use PDOException;
use DateTimeImmutable;

class ClienteRepository implements ClienteRepositoryInterface
{
    private DatabaseDriver $connection;
    private SelectStatement $selectStatement;
    private InsertStatement $insertStatement;

    public function __construct(
        DatabaseDriver $connection,
        SelectStatement $selectStatement,
        InsertStatement $insertStatement
    ) {
        $this->connection = $connection;
        $this->insertStatement = $insertStatement;
        $this->selectStatement = $selectStatement;
    }

    public function create(InputBoundary $cliente)
    {
        $now = new DateTimeImmutable();
        $values = $cliente->toArray(true);
        $values['created_at'] = $now->format('Y-m-d H:i:s');

        $clienteId = $this->insertStatement
            ->into('pessoa')
            ->values($values)
            ->insert();

        $cliente->setId((int)$clienteId);

        return $cliente;
    }

    public function getClient(string $cnpj): ?Cliente
    {
        $row = $this->selectStatement
            ->select()
            ->from('pessoa')
            ->where('cnpj', $cnpj)
            ->fetchOne();

        if (!$row) {
            throw new ClienteNotFoundException([
                'cnpj' => 'invalid',
                'informed_entry' => $cnpj,
                'message' => 'CNPJ não encontrado']);
        }

        return ClienteFactory::create($row);
    }

    public function checkClientExist(string $cnpj): ?Cliente
    {
        $row = $this->selectStatement
            ->select()
            ->from('pessoa')
            ->where('cnpj', $cnpj)
            ->fetchOne();

        if ($row) {
            throw new ClienteExistingException([
                'cnpj' => 'invalid',
                'informed_entry' => $cnpj,
                'message' => 'CNPJ já existe']);
        }

        return $row;
    }
}
