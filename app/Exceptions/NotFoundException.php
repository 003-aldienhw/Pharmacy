<?php

namespace App\Exceptions;

use CodeIgniter\Exceptions\HTTPExceptionInterface;
use Exception;

class NotFoundException extends Exception implements HTTPExceptionInterface{
    public function __construct(string $message = 'Not Found')
    {
        parent::__construct($message, 404);
    }
}
