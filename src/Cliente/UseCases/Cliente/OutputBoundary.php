<?php

declare(strict_types=1);

namespace App\Cliente\UseCases\Cliente;

use App\Shared\Helpers\DTO;

final class OutputBoundary extends DTO
{
    protected int $id;
    protected string $name;
    protected string $cnpj;
    protected int $idtipopessoa;
    protected int $idtipocontribuinte;
    protected string $createdAt;
    protected ?string $endedAt;

    public function getId(): int
    {
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

    public function getEndedAt(): string
    {
        return $this->endedAt;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
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
