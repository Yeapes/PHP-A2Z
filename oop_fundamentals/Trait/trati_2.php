<?php

trait MyTrait{

    static $name;

    abstract function sayHi();
}



class MyClass{
    use MyTrait;
    public function sayHi(){
        echo "Hello from MyClass";
    }
}

echo MyClass::$name = "Yeapes";




