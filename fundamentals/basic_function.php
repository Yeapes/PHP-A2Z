<?php
include_once "functions/functions.php";
 
if (isEven(10)){
    echo "Even Number";
}

echo PHP_EOL;
$fn = 0;
$factorial_result = factorial($fn);
echo "{$fn} factorial is {$factorial_result}";