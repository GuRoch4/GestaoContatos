<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Helpers\Template\Loader;
use Gustavo\Gestao\Models\Schedulers\Schedulers;

class Scheduler
{
    protected Loader $template;

    protected Schedulers $schedulers;

    public function __construct()
    {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
    }

    public function execute($data)
    {
        $search = "";
        if (isset($_GET['nameFilter'])) {
            $search = $_GET['nameFilter'];
            $schedulers = $this->schedulers->findAll([
                "name_scheduler" => $_GET['nameFilter']
            ]);
        } else {
            $schedulers = $this->schedulers->findAll();
        }

        $this->template->render('panel/scheduler', true, [
            "schedulers" => $schedulers,
            "search" => $search
        ]);
    }
}
