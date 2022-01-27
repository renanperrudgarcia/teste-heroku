<?php

declare(strict_types=1);

namespace App\Cliente\Domain\Exceptions;

use App\Shared\Exceptions\AppExceptionBase;
use App\Shared\Exceptions\AppValidationException;

class ClienteExistingException extends AppValidationException
{
    protected string $type = AppExceptionBase::TYPE_INVALID_INPUT;
    protected string $errorMessage = 'CNPJ já cadastrado';
}
