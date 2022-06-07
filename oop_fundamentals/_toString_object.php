<?php

class TestClass{
    private $color;
    public function __construct()
    {
        $this->color = "Red";
    }

    function __toString()
    {
        return "This color is {$this->color}";
    }
}

$test = new TestClass();
echo $test;