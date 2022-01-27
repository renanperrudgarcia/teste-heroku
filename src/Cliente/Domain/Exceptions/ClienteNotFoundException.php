<?php

declare(strict_types=1);

namespace App\Cliente\Domain\Exceptions;

use App\Shared\Exceptions\AppValidationException;

class ClienteNotFoundException extends AppValidationException
{
    protected string $errorMessage = 'Ocorreu um erro';
}
