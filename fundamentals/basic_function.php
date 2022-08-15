<?php
include_once "functions/functions.php";
 
if (isEven(10)){
    echo "Even Number";
}

echo PHP_EOL;
$fn = 0;
$factorial_result = factorial($fn);
echo "{$fn} factorial is {$factorial_result}";

echo PHP_EOL;

echo sum(12,12);

echo PHP_EOL;
//echo
echo multiply(5,9);
//end m
