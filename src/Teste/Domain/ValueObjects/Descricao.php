<?php

declare(strict_types=1);

namespace App\Teste\Domain\ValueObjects;

use DomainException;

final class Descricao
{
    private string $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao;
    }
    
    public function __toString(): string
    {
        return $this->descricao;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}
