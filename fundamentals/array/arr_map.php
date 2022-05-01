<?php

$data = [1,3,4,6,8, 10, 15, 16]; 

function sqr($n){ 
    return $n*$n;
}

$newData = array_map('sqr', $data);

print_r($newData);

function findEven($n){
    return $n % 2 == 0;
}


function findOdd($n){
    return $n % 2 == 1;
}

//Lets see array_filter

$arra_filter_even = array_filter($newData, 'findEven');

$arra_filter_odd = array_filter($newData, 'findOdd');

print_r($arra_filter_even);
print_r($arra_filter_odd);


function showSomething($n){
    printf("Number is %d", $n);
    echo PHP_EOL;
}

array_walk($data, 'showSomething');