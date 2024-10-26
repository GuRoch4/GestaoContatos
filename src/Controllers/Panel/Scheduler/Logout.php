<?php

namespace Gustavo\Gestao\Controllers\Panel\Scheduler;

use Gustavo\Gestao\Helpers\Template\Loader;
use Gustavo\Gestao\Models\Users\UserSession;

class Logout
{
    protected Loader $template;

    protected UserSession $userSession;

    public function __construct()
    {
        $this->template = new Loader();
        $this->userSession = new UserSession();
    }

    public function execute()
    {
        $this->userSession->destroy();
        header("Location: /login");
    }
}
