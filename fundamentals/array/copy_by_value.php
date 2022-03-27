<?php

// Copy by value
$arr = ["name" => "yeapes","age" => 22];

$new_arr = $arr;

$new_arr['name'] = "Rokib";

print_r($new_arr);

print_r($arr);


// Copy by refference
$arr = ["name" => "yeapes","age" => 22];

$new_arr = &$arr;

$new_arr['name'] = "Rokib";

print_r($new_arr);

print_r($arr);