<?php

declare(strict_types=1);

namespace App\Cliente\UseCases\Contracts;

use App\Cliente\UseCases\Cliente\InputBoundary;
use App\Cliente\UseCases\Cliente\OutputBoundary;
use App\Cliente\Domain\Cliente;
use App\Cliente\Domain\ValueObjects\BattlePokemon;

interface ClienteRepository
{
    public function getClient(string $cnpj): ?Cliente;
    public function checkClientExist(string $cnpj): ?Cliente;
    public function create(InputBoundary $cliente);
}
