<?php

namespace Gustavo\Gestao\Controllers\User\Services\Register;

class Validate{

    public function execute($data){
        $sucess = true;
        foreach($this->getFilds() as $key => $field){
            if ($field['required'] == false){
                continue;
            }
            if (!isset($data[$key]) || empty($data[$key])) {
                $sucess = false;
            }
        }
        return $sucess;
    }

    private function getFilds(){
        return[
            'name' => [
                'required' => true
            ],
            'email' => [
                'required' => true
            ],
            'password' => [
                'required' => true
            ],
            'phone' => [
                'required' => true
            ]
        ];
    }


}