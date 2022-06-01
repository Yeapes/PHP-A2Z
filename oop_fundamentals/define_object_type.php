<?php

class ShapeClass{
    public function test(){
        echo "I'm from shapeClass";
    }
}

class Shapes{

    private $names;
    public function __construct()
    {
        $this->names = array();
    } 

    public function addShape(ShapeClass $shape){
        // echo $shape->test();
        array_push($this->names, $shape);
    }

    public function countShape(){
        

        return count($this->names);
    }

}

class Rectangle extends ShapeClass{

}

class Student{

}


$rect = new Shapes();

$rect->addShape(new Rectangle());
$rect->addShape(new Rectangle());
$rect->addShape(new Rectangle());


echo $rect->countShape();