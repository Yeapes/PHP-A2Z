<?php


function isEven($n){
    if ($n % 2 == 0){
        return true;
    }

    return false;
}


//Get Factorial 
function factorial(int $n){
    $result = 1;
    for ($i = $n; $i > 1; $i--){
        $result = $result * $i;
    }
    return $result;
}