<?php

namespace App\Exception;

use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Throwable;

class AccountDeletedException extends AccountStatusException
{
    public function __construct(string $message = 'Account Not Found', int $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}