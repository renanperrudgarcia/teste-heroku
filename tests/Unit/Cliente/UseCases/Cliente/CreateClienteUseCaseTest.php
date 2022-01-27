<?php

declare(strict_types=1);

namespace Tests\Unit\Cliente\UseCases\Cliente;

use App\Cliente\Domain\ValueObjects\Cnpj;
use PHPUnit\Framework\TestCase;

class CreateClienteUseCaseTest extends TestCase
{
  protected string $cnpj;

  protected function setUp(): void
  {
    $this->cnpj = '77.941.490/0077-53';
  }

  public function testIfCnpjIsValid()
  {
      $valida = new Cnpj($this->cnpj);
      
      $this->assertEquals($this->cnpj, $valida);
  }

}
