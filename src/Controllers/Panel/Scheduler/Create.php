<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Helpers\Template\Loader;

class Create
{
    public function __construct()
    {
        $this->template = new Loader();
    }

    public function execute()
    {
        echo 'Criação tela create.php?';
    }
}
