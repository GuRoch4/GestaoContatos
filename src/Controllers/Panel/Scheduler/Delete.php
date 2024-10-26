<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use  Gustavo\Gestao\Helpers\Template\Loader;
use Gustavo\Gestao\Models\Schedulers\Schedulers;
use Gustavo\Gestao\Helpers\Message\Message;

class Delete
{
    protected Loader $template;

    protected Schedulers $schedulers;

    protected Message $message;

    public function __construct()
    {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
        $this->message = new Message();
    }

    public function execute($data)
    {
        if ($this->schedulers->delete($data['id'])) {
            $this->message->setMessageSuccess('Deletado com sucesso');
            header('Location: /panel/scheduler/');
            return;
        }

        $this->message->setMessageError('Não foi possivel deletar');
        header('Location: /panel/scheduler/');
    }
}
