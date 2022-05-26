<?php

class Animals{

    public $name;
    function __construct($name){
        $this->name = $name;
    }

    public function sayYourName(){
        echo "I am $this->name \n";
    }
}

$a = new Animals("Dog");
$a->sayYourName();

$a2 = new Animals("Pussy");
$a2->sayYourName();