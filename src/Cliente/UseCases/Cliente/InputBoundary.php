<?php

declare(strict_types=1);

namespace App\Cliente\UseCases\Cliente;

use App\Shared\Helpers\DTO;

final class InputBoundary extends DTO
{
    protected int $id;
    protected string $name;
    protected string $cnpj;
    protected int $idtipopessoa;
    protected int $idtipocontribuinte;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): int
    {
        $this->id = $id;

        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function getIdtipopessoa(): int
    {
        return $this->idtipopessoa;
    }

    public function getIdtipocontribuinte(): int
    {
        return $this->idtipocontribuinte;
    }
}
