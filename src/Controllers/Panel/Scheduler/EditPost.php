<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Models\Schedulers\Schedulers;
use Gustavo\Gestao\Helpers\Message\Message;

class EditPost
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
        $id = $data['id'];
        unset($data['id']);
        $this->schedulers->update($data, $id);
        $this->message->setMessageSuccess('Agendamento atualizado com sucesso');
        header('location: /panel/scheduler/');
    }
}
