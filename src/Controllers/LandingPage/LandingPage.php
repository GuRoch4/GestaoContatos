<?php

namespace Gustavo\Gestao\Controllers\LandingPage;

use Gustavo\Gestao\Helpers\Template\Loader;
use Gustavo\Gestao\Models\Schedulers\Schedulers;

class LandingPage
{
    private Loader $template;
    private Schedulers $schedulers;
    public function __construct()
    {
        $this->template = new Loader();
        $this->schedulers = new Schedulers();
    }
    public function execute()
    {
        $schedulers = $this->schedulers->findAll([], "*", 6);
        $this->template->render("landingPage/landingPage", false, [
            "schedulers" => $schedulers
        ]);
    }
}
