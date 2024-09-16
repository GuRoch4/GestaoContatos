<?php

require_once './vendor/autoload.php';

session_start();


use Gustavo\Gestao\Routers\Loader;
//use Gustavo\Gestao\Models\Users\Users;

//$user = new Users();

//$data =[
//    'name' => "Gustavo",
//    'email' => "gu@gmail.com",
//    'phone' => "3599702",
//    'password' => password_hash('1234', PASSWORD_DEFAULT)
//];

//$user->create($data);


$loader = new Loader();
$loader->execute();
