<?php

require_once './vendor/autoload.php';

session_start();


use Gustavo\Gestao\Routers\Loader;
//use Gustavo\Gestao\Models\Users\Users;

//$user = new Users();

//$condition = [
//    "name"=>"dwa"
//];

//$data = $user->findOne($condition, "name, email");

//var_dump($data);

$loader = new Loader();
$loader->execute();
