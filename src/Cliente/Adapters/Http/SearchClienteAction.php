<?php

declare(strict_types=1);

namespace App\Cliente\Adapters\Http;

use App\Cliente\UseCases\Cliente\InputBoundary;
use App\Cliente\UseCases\Cliente\SearchClienteUseCase;
use App\Shared\Adapters\Http\PayloadAction;
use App\Cliente\Domain\ValueObjects\Cnpj;

/**
 * @OA\Get(
 *     tags={"Cliente"},
 *     path="/cliente",
 *     @OA\Parameter(
 *      in="query",
 *      name="cnpj",
 *      description="At the end of the endpoint url, pass the cnpj of the client you want to query",
 *      required=true
 *     ),
 *     method="handle",
 *     @OA\Response(
 *      response="200",
 *      description="Customer list by cnpj",
 *     )
 * )
 */
class SearchClienteAction extends PayloadAction
{
    private SearchClienteUseCase $useCase;

    public function __construct(SearchClienteUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    protected function handle(): array
    {
        $cnpj = (int)$this->args['cnpj'] ?? 0;

        if (!empty($cnpj)) {
            $input = InputBoundary::build([
                'cnpj' => (string)$cnpj
            ]);
        }

        return $this->useCase->handle($input)->toArray();
    }
}
