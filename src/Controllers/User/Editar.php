<?php

namespace Gustavo\Gestao\Controllers\User;

use Gustavo\Gestao\Helpers\Template\Loader;

class Editar
{
    private Loader $template;

    public function __construct()
    {
        $this->template = new Loader();
    }

    public function execute()
    {
        $this->template->render("user/editar");
    }
}
