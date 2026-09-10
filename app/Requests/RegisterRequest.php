<?php
namespace App\Requests;

class RegisterRequest{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
        public readonly string $username,
    ) {}
}