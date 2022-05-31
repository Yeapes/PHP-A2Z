<?php

class Student{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;

        $this->sayHi();
    }

    public function sayHi()
    {
        echo "$this->name says hi \n";
    }
}

class Staff extends Student{
    public function sayHi()
    {
        parent::sayHi();
        echo "Hello";
    }
}

$staff1 = new Staff("Joshim");