<?php

class Vehicles{
    public $type;
    function type(){
        echo "I'm a $this->type \n";
    }
}

class Animals{
    public $type;

    function type(){
        echo "I'm a $this->type \n";

    }
}


$v1 = new Vehicles();

$v1->type = "Microbus";

$v1->type();

$a1 = new Animals();
$a1->type = "dog";

$a1->type();