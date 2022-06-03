<?php

interface Animal{
    public function color($color);
    public function height($height);

    public function getColor();
    public function getHeight();
}

class Cat implements Animal{
    private $height;
    private $color;
    public function color($color){
        $this->color = $color;
    }

    public function height($height)
    {
        $this->height = $height;
    }

    public function getColor(){
        return $this->color;
    }

    public function getHeight(){
        return $this->height;
    }
     
}


$cat = new Cat();

$cat->color("White & Black");
$cat->height("5.5' ");
echo $cat->getColor();
echo PHP_EOL;
echo $cat->getHeight();