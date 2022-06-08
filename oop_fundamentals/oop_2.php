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

      //Getter method for parameters

    function __get($name)
    {
        return $this->parameters[$name];
    }


    //Setter method for parameters
    function __set($name, $value)
    {
        $this->parameters[$name] = $value;
    }

    /**
     * __call a magic method if we call a undefined method then it will automatically invoke
     * 
     */
    public function __call($name, $arguments)
    {
        echo "Your method not defined {$name}";
    }

     /**
     * __callStatic a magic method if we call a static undefined method then it will automatically invoke
     * 
     */
    public static function __callStatic($name, $arguments)
    {
        echo "Undefined Static Method";
    } 
}

$b = new Bird("Yellow","10 gm","10 meter per second");

echo $b->weight;
echo PHP_EOL;

Bird::anything();
$b->findany();