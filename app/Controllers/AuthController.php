<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function register(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        return $this->response->setJSON([
            'email' => $email,
            'password' => $password,
        ]);
    }

    public function login(){


    }

    public function logout(){

    }
}
