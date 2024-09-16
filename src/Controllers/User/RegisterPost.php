<?php

namespace Gustavo\Gestao\Controllers\User;

use Gustavo\Gestao\Models\Users\Users;
use Gustavo\Gestao\Controllers\User\Services\Register\Validate;
use Gustavo\Gestao\Helpers\Message\Message;

class RegisterPost{
    protected Users $users;
    protected Validate $validate;
    protected Message $message;
    public function __construct(){
        $this->users = new Users();
        $this->validate = new Validate();
        $this->message = new Message();
    }
    public function execute($data){

        if (!$this->validate->execute($data)){
            header('location: /register');
            return;
        }

        $data['password'] = password_hash($data['password'], \PASSWORD_DEFAULT);

        $this->users->create($data);

        $this->message->setMessageSuccess("Registrado com sucesso");

        header('location: /login');
        return;
    }
}