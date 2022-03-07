<?php

//We know that factorial calculation is : suppose we want to know number 5 factorial
//it will be 5*4*3*2*1


function factorial($n){
    if ($n <= 1){
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5);