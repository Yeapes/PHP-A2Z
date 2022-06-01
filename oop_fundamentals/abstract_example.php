<?php
 
abstract class Shape{
    public abstract function getArea();
    public abstract function getPerimeter();
}

class Rectangle extends Shape{
    private $base,$height;

    public function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }
    
    public function setHeight($height){
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->base * $this->height;
    }

    public function getPerimeter()
    {
        
    }
}

$rect = new Rectangle(10,10);

echo $rect->getArea();


// $shape = new Shape();