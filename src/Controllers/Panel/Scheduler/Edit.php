<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Helpers\Template\Loader;

class Edit
{
    public function __construct()
    {
        $this->template = new Loader();
    }

    public function execute()
    {
        echo "tela de editação";
    }
}
