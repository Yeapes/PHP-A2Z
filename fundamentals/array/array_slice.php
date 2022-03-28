<?php

$number = [12,14,18,20,26];

//set true getting actual offset
$slice_number = array_slice($number,1,-1,true);

print_r($slice_number);

$arr = ["name" => "Yeapes", "age" => "22","district" => "Noakhali"];

$arr_slice = array_slice($arr,0,-1);

print_r($arr_slice);