<?php
namespace App\Exceptions;

use Exception;
use CodeIgniter\Exceptions\HTTPExceptionInterface;

class InternalServerErrorException extends Exception implements HTTPExceptionInterface
{
    public function __construct($message = "Internal Server Error")
    {
        // Angka 500 di bawah ini akan otomatis menjadi HTTP Status Code
        parent::__construct($message, 500);
    }
}