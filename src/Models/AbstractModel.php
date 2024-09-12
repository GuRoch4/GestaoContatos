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
//"INSERT INTO users (name, email, phone, password) VALUES (:name, :email, :phone, :password)"
    public function create($data){

        try {
            $column = "";
            $values = "";
            foreach ($data as $key => $value) {
                $column .= "$key,";
                $values .= ":$key,";
            }
            $column =rtrim($column, ",");
            $values =rtrim($values, ",");

            $table = $this->table;
            $sql = "INSERT INTO $table ($column) VALUES ($values)";

            $stmt = $this->connect->prepare($sql);
            if ($stmt->execute($data)){
                return $this->connect->lastInsertId();
            }
            return false;
        }catch (\Exception $e){
            return false;
        }

    }
}