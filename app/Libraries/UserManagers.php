<?php
namespace App\Libraries;

use App\DTO\UserProfileDTO;
use App\Models\AccountModel;

class UserManagers{
    public function __construct(
        protected AccountModel $accountModel
    ){}

    public function adduserprofile(UserProfileDTO $userData){
        $id = session()->get('user_id');

        $this->accountModel->update($id, ['data' => $userData->toArray()]);
    }
}