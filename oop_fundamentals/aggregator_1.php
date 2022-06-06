<?php

class DistrictClass implements IteratorAggregate,Countable{

    private $districts;

    public function __construct()
    {
        $this->districts = [];
    }

    public function setDistrict($district){

        array_push($this->districts,$district);

    }

    public function getDistricts(){
        return $this->districts;
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }

    function count(): int
    {
        return count($this->districts);
    }
}

$districts = new DistrictClass;
$districts->setDistrict("Noakhali");
$districts->setDistrict("Lakshmipur");
$districts->setDistrict("Feni");
$districts->setDistrict("Chittagong");

foreach($districts as $district){
    echo $district."\n";
}

echo count($districts);