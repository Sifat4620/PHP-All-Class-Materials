<?php

class man{
    public $name;
    public $age;

    function out_put($name,$age){
        $this->name= $name;
        $this->age= $age;
        return "Name :".$this->name.",Age :".$this->age;
    }
}

$obj = new man();
echo $obj->out_put("Sifat","30");

?>