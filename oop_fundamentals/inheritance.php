<?php

class Shape{
    protected $name;
    protected $area;
    public function __construct($name)
    {
        $this->name = $name;
        $this->calculatedArea();
    }

    public function getArea()
    {
            echo "This {$this->name}'s area {$this->area}";
    }

    public function  calculatedArea(){

    }


}


class Triangle extends Shape{
    private $a, $b, $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }


    public function  calculatedArea(){
        $perimeter = ($this->a + $this->b + $this->c)/2;
        $this->area = sqrt($perimeter*($perimeter - $this->a)*($perimeter - $this->b)*($perimeter - $this->c));
    }

}


class Rectangle extends Shape{
    private $a, $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b; 
        parent::__construct("Rectangle");
    }


    public function  calculatedArea(){
         
        $this->area =  $this->a * $this->b;
    }
}

$rect1 = new Rectangle(4,4);

$rect1->getArea();