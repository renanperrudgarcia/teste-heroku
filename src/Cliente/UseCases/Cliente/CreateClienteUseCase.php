<?php

declare(strict_types=1);

namespace App\Cliente\UseCases\Cliente;

use App\Cliente\UseCases\Cliente\InputBoundary;
use App\Cliente\UseCases\Cliente\OutputBoundary;
use App\Cliente\UseCases\Contracts\ClienteRepository;
use App\Cliente\Domain\ValueObjects\Cnpj;
use App\Shared\Exceptions\AppValidationException;

final class CreateClienteUseCase
{
    private ClienteRepository $clienteRepository;

    public function __construct(
        ClienteRepository $clienteRepository
    ) {
        $this->clienteRepository = $clienteRepository;
    }

    public function handle(InputBoundary $input): OutputBoundary
    {
        $cnpj = new Cnpj($input->getCnpj());
        $this->clienteRepository->checkClientExist($input->getCnpj());

        $cliente = $this->clienteRepository->create($input);

        $outputData = $cliente->toArray();

        return OutputBoundary::build($outputData);
    }
}
