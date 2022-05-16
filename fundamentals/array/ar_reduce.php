<?php

$arr = array(1,4,5,9,2,5);

function sum($oldValue,$newValue){

    return $oldValue + $newValue;
}

$subReduce = array_reduce($arr,'sum');

echo $subReduce;