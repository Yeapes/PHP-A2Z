<?php


class Bird{

    private $parameters;

    public function __construct($color, $weight, $speedOfFly)
    {
        $this->parameters = [];
        $this->parameters['color'] = $color;
        $this->parameters['weight'] = $weight;
        $this->parameters['speedOfFly'] = $speedOfFly; 
    }

    
    function __isset($name)
    {
        if(isset($this->parameters[$name])){
            echo "Found";
            return true;
        }else{
            return false;
        }
    }

    function __unset($name)
    {
        unset($this->parameters[$name]);
    }

    function __get($name)
    {
        return $this->parameters[$name];
    }
    
    function __set($name, $value)
    {
        $this->parameters[$name] = $value;
    }
}

$b = new Bird("Yellow","10 gm","10 meter per second");

echo $b->weight;