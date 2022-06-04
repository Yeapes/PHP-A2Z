<?php

//__get is magic method as replace of getter & __set is replace of setter
class ExampleClass{
    private $name;

    private $age;
    private $school;

    public function __construct($name = '', $age = '', $school)
    {
        $this->name = $name;
        $this->age = $age;
        $this->school = $school;
    }

    function __get($name)
    {
        return $this->name;
    }

    function __set($name, $value)
    {
        $this->name = $value;
    }
}

$e1 = new ExampleClass('Yeapes',22,'Bangladesh University');
echo $e1->name;

$e1->age = 23;

echo $e1->age;