<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Helpers\Template\Loader;
use Gustavo\Gestao\Models\Schedulers\Schedulers;

class ApiScheduler
{
    protected Loader $template;
    protected Schedulers $schedulers;
    public function __construct()
    {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
    }
    public function execute()
    {
        $schedulers = $this->schedulers->findAll();

        echo json_encode([
            "total_schedulers" => count($schedulers)
        ]);
    }
}
