<?php

$number = [12,14,18,20,26];

//set true getting actual offset
$slice_number = array_splice($number,1,-1,true);

print_r($slice_number);
print_r($number);

//Set new value to which is splice
$arr = ["name" => "Yeapes", "age" => "22","district" => "Noakhali"];
$add_new = ["name" => "Raihan", "age" => "23"];
$arr_slice = array_splice($arr,0,-1,$add_new,true);

print_r($arr_slice);
print_r($arr);