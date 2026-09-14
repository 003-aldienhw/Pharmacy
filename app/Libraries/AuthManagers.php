<?php

namespace App\Libraries;

use App\DTO\LoginDTO;
use App\Exceptions\NotFoundException;
use App\Exceptions\UnauthorizedException;
use App\Models\AccountModel;
use App\DTO\RegisterDTO;

class AuthManagers{

    public function __construct(
        protected AccountModel $accountModel
    ){}

    public function register(RegisterDTO $data){

        $data->password = $this->hashPassword($data->password);
        
        $this->accountModel->insert(
            $data->toArray()
        );
    }
    
    public function login(LoginDTO $data): string{
        $user = $this->accountModel
            ->where('email', $data->email)
            ->first();

        if (!$user) {
            throw new NotFoundException('User not found');
        }

        if (!password_verify($data->password, $user['password'])) {
            throw new UnauthorizedException("Password invalid");
        }

        session()->set([
            'user_id' => $user['id'],
            'email' => $user['email'],
            'is_logged_in' => true,
        ]);

        return session()->session_id;
    }

    private function hashPassword($password): string{
        return password_hash($password, PASSWORD_DEFAULT);
    }



}