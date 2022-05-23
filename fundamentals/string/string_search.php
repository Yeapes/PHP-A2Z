<?php

$string = "We  love our country";

//Now find love from the string

$search_value = strpos($string, "love");

echo $search_value;

echo PHP_EOL;

//We are gonna find case-insensetive value from stripos

$search_i_value = stripos($string, "we");

echo $search_i_value;
echo PHP_EOL;
//If we check offset obviously we have to check condition with type bcz in php 0 is equivalent to false

if($search_i_value !== false){
    echo "\n Data found \n";
}else {
    echo "Data not found";
}