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
        $this->router->namespace('Gustavo\Gestao\Controllers\Panel\Scheduler');

        $this->router->get("/panel/scheduler/", 'Scheduler:execute', middleware: UserSession::class);
        $this->router->get("/panel/scheduler/create", 'Create:execute', middleware: UserSession::class);
        $this->router->post("/panel/scheduler/create/save", 'CreatePost:execute', middleware: UserSession::class);

        $this->router->get("/panel/scheduler/edit/{id}", 'Edit:execute', middleware: UserSession::class);
        $this->router->post("/panel/scheduler/delete/{id}", 'Delete:execute', middleware: UserSession::class);

        $this->router->get("/panel/scheduler/logout", 'Logout:execute', middleware: UserSession::class);
    }
}
