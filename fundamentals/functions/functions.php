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


// Return Type Hinting

function sum(int $x, int $y): int {
    return $x + $y;
}


// Unlimited argument recive

function multiply(int ...$numbers): int {
    
    $result = 1;

    for ($i = 0; $i < count($numbers); $i++){
        $result = $result * $numbers[$i];
    }
    
    return $result;
}