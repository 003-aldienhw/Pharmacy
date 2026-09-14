<?php

namespace App\Libraries;

use App\Models\AccountModel;
use App\DTO\RegisterDTO;

class AuthManagers{

    public function register(RegisterDTO $data){
        $accountModel = new AccountModel();

        $data->password = $this->hashPassword($data->password);
        
        $accountModel->insert(
            $data->toArray()
        );
    } 

    private function hashPassword($password): string{
        return password_hash($password, PASSWORD_DEFAULT);
    }

}