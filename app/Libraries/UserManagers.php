<?php
namespace App\Libraries;

use App\Models\AccountModel;

class UserManagers{
    public function __construct(
        protected AccountModel $accountModel
    ){}
}