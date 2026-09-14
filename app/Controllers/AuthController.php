<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\DTO\RegisterDTO;
use CodeIgniter\HTTP\ResponseInterface;
use App\Exceptions\InternalServerErrorException;

class AuthController extends BaseController
{
    public function register(){
        $data = RegisterDTO::fromArray($this->request->getJSON(true));
        $service = service("authentication");
        
        try{
            $service->register($data);

            return $this->response
                ->setStatusCode(201)
                ->setJSON([
                    'message' => 'Account created',
                ]);
        }catch(\Throwable $e){
            throw new InternalServerErrorException();
        }
    }

    public function login(){


    }

    public function logout(){

    }
}
