<?php

/**
 * Our Goal is search and replace the text with method chaining
 */

class StringUtility{

    private $string;
    private $search;
    function __construct($string)
    {
        $this->string = $string;
    }

    function search($string){
        $this->search = $string;
        return $this;
    }

    function replace($string){
        if (!isset($this->string)) {
            throw new Exception('No string found for replace');
        }
        $this->string = str_replace($this->search,$string,$this->string);
        $this->search = "";
        return $this;
    }

    function strtUpper(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    function strtLower(){
        $this->string = strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }

}

$s = new StringUtility("Hello world");

$s->search("Hello")->replace("Hi")->strtUpper()->print();