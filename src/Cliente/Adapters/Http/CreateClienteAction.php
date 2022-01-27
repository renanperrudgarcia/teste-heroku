<?php

declare(strict_types=1);

namespace App\Cliente\Adapters\Http;

use App\Cliente\UseCases\Cliente\InputBoundary;
use App\Cliente\UseCases\Cliente\CreateClienteUseCase;
use App\Shared\Adapters\Http\PayloadAction;
use App\Cliente\Domain\ValueObjects\Cnpj;

/**
 * @OA\Post(
 *     tags={"Cliente"},
 *     path="/cliente",
 *     @OA\RequestBody(
 *      @OA\JsonContent(
 *        type="object",
 *        @OA\Property(property="name", type="string"),
 *        @OA\Property(property="cnpj", type="string"),
 *        @OA\Property(property="idtipopessoa", type="integer"),
 *        @OA\Property(property="idtipocontribuinte", type="integer")
 *      )
 *     ),
 *     method="handle",
 *     @OA\Response(
 *      response="201",
 *      description="Customer register",
 *     )
 * )
 */
class CreateClienteAction extends PayloadAction
{
    private CreateClienteUseCase $useCase;

    public function __construct(CreateClienteUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    protected function handle(): array
    {
        if (!empty($this->body)) {
            $input = InputBoundary::build([
                'name' => $this->body['name'],
                'cnpj' => $this->body['cnpj'],
                'idtipopessoa' => $this->body['idtipopessoa'],
                'idtipocontribuinte' => $this->body['idtipocontribuinte']
            ]);

            return $this->useCase->handle($input)->toArray();
        }
    }
}
