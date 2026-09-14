<?php

namespace App\Libraries;

use App\DTO\LoginDTO;
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
    
    public function login(LoginDTO $data): bool{
        $user = $this->accountModel
            ->where('email', $data->email)
            ->first();

        if (!$user) {
            return false;
        }

        if (!password_verify($data->password, $user['password'])) {
            return false;
        }

        // session()->set([
        //     'user_id' => $user['id'],
        //     'email' => $user['email'],
        //     'is_logged_in' => true,
        // ]);

        return true;
    }

    private function hashPassword($password): string{
        return password_hash($password, PASSWORD_DEFAULT);
    }

}