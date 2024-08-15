<?php

namespace Gustavo\Gestao\Routers\User;

use CoffeeCode\Router\Router;
use Gustavo\Gestao\Controllers\User\Adicionar;
use Gustavo\Gestao\Controllers\User\Editar;
use Gustavo\Gestao\Controllers\User\visualizar;
use Gustavo\Gestao\Controllers\User\excluir;

class UserRouters
{
    private Router $router;

    private Adicionar $adicionar;

    private Visualizar $visualizar;

    private Editar $editar;

    private Excluir $excluir;

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->adicionar = new Adicionar();
        $this->visualizar = new Visualizar();
        $this->editar = new Editar();
        $this->excluir = new Excluir();
    }

    public function execute()
    {
        $this->router->get("/adicionar", function () {
            $this->adicionar->execute();
        });

        $this->router->get("/visualizar", function () {
            $this->visualizar->execute();
        });

        $this->router->get("/editar", function () {
            $this->editar->execute();
        });

        $this->router->get("/excluir", function () {
            $this->excluir->execute();
        });
    }
}
