<?php

namespace Gustavo\Gestao\Routers;

use CoffeeCode\Router\Router;
use Gustavo\Gestao\Routers\User\UserRouters;
use Gustavo\Gestao\Routers\Panel\Scheduler\SchedulerRouter;

class Loader
{
    private Router $router;

    private UserRouters $userRouter;

    private SchedulerRouter $schedulerRouter;

    public function __construct()
    {
        $this->router = new Router("http://localhost");
        $this->userRouter = new UserRouters($this->router);
        $this->schedulerRouter = new SchedulerRouter($this->router);
    }


    public function execute()
    {
        $this->userRouter->execute();
        $this->schedulerRouter->execute();
        $this->router->dispatch();


        if ($this->router->error()) {
            echo "404";
        }
    }
}
