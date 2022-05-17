<?php

//We want an array that will be start from 9-70

$numbers = range(9,70,2);
// print_r($numbers);

//now print even from $numbers

foreach($numbers as $number){
    echo $number;

    echo PHP_EOL;
}