<?php

class Man {
    public $name;
   
    function __construct($name){
        $this->name = $name;
    } 


    function __destruct(){
        return "Name: " . $this->name;
    }
}

$obj = new Man("sifat");

echo $obj->__destruct();  

?>
