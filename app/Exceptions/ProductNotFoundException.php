<?php

namespace App\Exceptions;

use Exception;

class ProductNotFoundException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }

    public function getessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
