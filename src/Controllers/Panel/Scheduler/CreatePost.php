<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Models\Schedulers\Schedulers;
use Gustavo\Gestao\Helpers\Message\Message;

class CreatePost
{
    protected Schedulers $schedulers;

    protected Message $message;

    public function __construct()
    {
        $this->schedulers = new Schedulers();
        $this->message = new Message();
    }

    public function execute($data)
    {
        $dataUser = $this->schedulers->findOne([
            "email" => $data['email']
        ]);


        if ($dataUser) {
            $this->message->setMessageError("Já existe um usuário com esse email");
            header('location: /panel/scheduler/');
            return;
        }

        if (empty($data['name']) || empty($data['phone']) || empty($data['email']) || empty($data['address'])) {
            $this->message->setMessageError('Todos os campos devem ser preenchidos');
            header('location: /panel/scheduler/create'); // Redirecionar para a página anterior
            return; // Para garantir que a execução pare aqui
        }

        //deve conter alem da criação a validação dos dados     
        $this->schedulers->create($data);
        $this->message->setMessageSuccess('Agendamento criado com sucesso');
        header('location: /panel/scheduler/');
    }
}
