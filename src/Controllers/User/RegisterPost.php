<?php

namespace Gustavo\Gestao\Controllers\User;

use Gustavo\Gestao\Models\Users\Users;
use Gustavo\Gestao\Controllers\User\Services\Register\Validate;
class RegisterPost{
    protected Users $users;
    protected Validate $validate;
    public function __construct(){
        $this->users = new Users();
        $this->validate = new Validate();
    }
    public function execute($data){

        if (!$this->validate->execute($data)){
            header('location: /register');
            return;
        }


        $data['password'] = password_hash($data['password'], \PASSWORD_DEFAULT);
        $this->users->create($data);

        header('location: /login');
        return;
    }
}