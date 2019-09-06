<?php
namespace ApiTest;

class ApiTest {
    public $name;
    public $age;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getInfo(){
        return sprintf("%s:%s",$this->name,$this->age);
    }
}
