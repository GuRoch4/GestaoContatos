<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Helpers\Template\Loader;

Class Create{
    protected Loader $template;

    public function __construct(){
        $this->template = new Loader();
    }

    public function execute()
    {
        $this->template->render('panel/schedulerCreate', true);
    }

}