<?php

namespace Gustavo\Gestao\Routers\Panel\Scheduler;


use CoffeeCode\Router\Router;
use Gustavo\Gestao\Models\Users\UserSession;

class SchedulerRouter
{
    private Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function execute()
    {
        $this->router->namespace('Carlos\Scheduler\Controllers\Panel\Scheduler');

        $this->router->get("/panel/scheduler/", 'Scheduler:execute', middleware: UserSession::class);

        $this->router->get("/panel/scheduler/create", 'Create:execute', middleware: UserSession::class);

        $this->router->get("/panel/scheduler/edit", 'Edit:execute', middleware: UserSession::class);
    }
}
