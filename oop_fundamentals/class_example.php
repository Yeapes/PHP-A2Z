<?php

class RGB{

    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = '')
    {
       $this->color = ltrim($colorCode,'#');
       $this->parseColor();
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($colorCode){
        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }

    public function getRed(){
        return $this->green;
    }

    public function getGreen(){
        return $this->green;
    }

    public function getBlue(){
        return $this->blue;
    }

    public function getRGB(){
        echo "{$this->red}  {$this->green} {$this->blue}";
    }



    private function parseColor(){

        if($this->color){
            // echo "1";
            list($this->red, $this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');
        }else{
            list($this->red, $this->green,$this->blue) = array(0,0,0);
        }
        // print_r($this->blue);
    }


}

$color1 = new RGB('ff00e5');

$color1->getRGB();