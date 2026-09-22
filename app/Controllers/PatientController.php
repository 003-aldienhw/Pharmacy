<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\DTO\UserProfileDTO;
use CodeIgniter\HTTP\ResponseInterface;

class PatientController extends BaseController
{
    public function adduserprofile(){
        $data = UserProfileDTO::fromArray($this->request->GetJSON(true));
        $service = service("users");

        try{
            $service->adduserprofile($data);

            return $this->response
                ->setStatusCode(201)
                ->setJSON([
                    'message' => 'User profile created',
            ]);
        }catch(\Throwable $e){
            return $this->response
                ->setStatusCode(500)
                ->setJSON(['message' => 'Internal server error']);
            }
        }
} 
