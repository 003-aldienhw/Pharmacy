<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function getuserprofile(){
        $service = service("users");

        try{
            $data = $service->getuserprofile();

            return $this->response
                ->setJSON([
                    'message' => 'Success to get user data',
                    'data' => $data
            ]);
        }catch(\Throwable $e){
            return $this->response
                ->setStatusCode(500)
                ->setJSON(['message' => 'Internal server error']);
            }
        }
}
