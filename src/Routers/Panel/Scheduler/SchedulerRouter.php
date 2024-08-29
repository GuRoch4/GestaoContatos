<?php

namespace Gustavo\Gestao\Routers\Panel\Scheduler;


use CoffeeCode\Router\Router;

class SchedulerRouter
{
    private Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function execute()
    {
        $this->router->namespace('Gustavo\Gestao\Controllers\Panel\Scheduler');
        $this->router->get("/panel/scheduler", 'Scheduler:execute');
        $this->router->get("/panel/scheduler/create", 'Create:execute');


    }

}
