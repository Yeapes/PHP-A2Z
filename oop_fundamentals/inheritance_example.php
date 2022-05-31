<?php

class Animal{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo "{$this->name} is eating";
    }

    public function sleeping()
    {
        echo "{$this->name}  is sleeping \n";
    }

    public function run()
    {
        echo "$this->name is running \n";
    }

    public function greet()
    {

    }
}


class Bird extends Animal{
    public function fly()
    {
        echo "$this->name is flying \n";
    }
}


class Human extends Animal
{
    public function greet()
    {
        echo "Greetings from ,$this->name \n";
    }
}


$bird1 = new Bird("Humming");

$bird1->fly();

$rakib = new Human('Rakib');

$rakib->greet();