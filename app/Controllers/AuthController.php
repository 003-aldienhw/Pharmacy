<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\DTO\LoginDTO;
use App\DTO\RegisterDTO;
use App\Exceptions\UnauthorizedException;
use CodeIgniter\HTTP\ResponseInterface;

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
            return $this->response
                ->setStatusCode(500)
                ->setJSON(['message' => 'Internal server error']);
        }
    }

    public function login(){
        $data = LoginDTO::fromArray($this->request->getJSON(true));
        $service = service("authentication");

        try{
            $session_id = $service->login($data);
            return $this->response
                ->setStatusCode(200)
                ->setJSON([
                    'message' => 'Login successfull',
                ])
                ->setCookie(
                    'ci_session',
                    $session_id,
                    3600,
                    '',
                    '/',
                    '',
                    false,
                    true
                );
            
        }catch(UnauthorizedException $e){
            return $this->response
                ->setStatusCode($e->getCode())
                ->setJSON(['message' => $e->getMessage()]);
        }catch(\Throwable $e){
            return $this->response
                ->setStatusCode(500)
                ->setJSON(['message' => 'Internal server error']);
        }
    }

    public function logout(){
        session()->destroy();

        return $this->response
            ->deleteCookie('ci_session')
            ->setJSON([
                'message' => 'Logout successfull'
            ]);
    }
}
