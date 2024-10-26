<?php

namespace Gustavo\Gestao\Models;

use Gustavo\Gestao\Helpers\Database\Database;

abstract class AbstractModel
{
    public $table;

    protected Database $database;

    protected $connect;

    public function __construct()
    {
        $this->database = new Database();
        $this->connect = $this->database->execute();
    }

    //"INSERT INTO users (name, email, phone, password) VALUES (:name, :email, :phone, :password)"
    public function create($data)
    {
        try {
            $column = "";
            $values = "";
            foreach ($data as $key => $value) {
                $column .= "$key,";
                $values .= ":$key,";
            }
            $column = rtrim($column, ",");
            $values = rtrim($values, ",");
            $table = $this->table;
            $sql = "INSERT INTO $table ($column) VALUES ($values)";
            $stmt = $this->connect->prepare($sql);
            if ($stmt->execute($data)) {
                return $this->connect->lastInsertId();
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }

    //SELECT * FROM `users` WHERE email = :email AND phone = :phone
    public function findOne($condition, $column = "*")
    {
        $where = "";
        foreach ($condition as $key => $value) {
            $where .= "$key = :$key AND ";
        }
        $where = rtrim($where, "AND ");
        $table = $this->table;
        $sql = "SELECT $column FROM $table WHERE " . $where;
        $stmt = $this->connect->prepare($sql);
        $stmt->execute($condition);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function findAll($condition = [], $column = "*")
    {
        $where = "";
        if (count($condition) > 0) {
            foreach ($condition as $key => $value) {
                $where .= "$key = :$key AND ";
            }
            $where = rtrim($where, "AND ");
        } else {
            $where = "1";
        }

        $table = $this->table;
        $sql = "SELECT $column FROM $table WHERE " . $where;
        $stmt = $this->connect->prepare($sql);
        if (count($condition) > 0) {
            $stmt->execute($condition);
        } else {
            $stmt->execute();
        }

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        echo $schedulers;
    }

    //UPDATE TABLE SET name = :name, idade = :idade WHERE id = :id
    public function update() {}

    //DELETE FROM TABLE WHERE id = :id
    public function delete($id)
    {
        $table = $this->table;
        $sql = "DELETE FROM $table WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $response = $stmt->execute([
            'id' => $id
        ]);

        if ($response) {
            return true;
        }

        return false;
    }
}
