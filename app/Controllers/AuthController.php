<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\DTO\LoginDTO;
use App\DTO\RegisterDTO;
use App\Exceptions\UnauthorizedException;
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
        $data = LoginDTO::fromArray($this->request->getJSON(true));
        $service = service("authentication");

        try{
            if($service->login($data)){
                return $this->response
                    ->setStatusCode(200)
                    ->setJSON([
                        'message' => 'Login successfull',
                    ]);
            } 
        }catch(\Throwable $e){
            throw new InternalServerErrorException();
        }
        
        throw new UnauthorizedException('Wrong email or password    ');
    }

    public function logout(){

    }
}
