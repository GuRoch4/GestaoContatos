<?php

namespace Gustavo\Gestao\Models;

use Gustavo\Gestao\Helpers\Database\Database;

abstract class AbstractModel
{
    public $table;

    protected Database $database;
    protected $connect;


    public function __construct(){
        $this->database = new Database();
        $this->connect = $this->database->execute();
    }
//"INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)"
    public function create($data){
        echo "metododo para ciração de uma data";
    }

    

}