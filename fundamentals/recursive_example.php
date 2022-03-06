<?php

//print 1 - 10 with recursive function 
function printN($n){
    if($n > 10){
        return;
    }
    echo $n."\n";
    $n++;

    printN($n);
}
// printN(1);

//Recursive function
function printSomething(int $counter, int $end, int $steping){
    if($counter > $end){
        return;
    }
    echo $counter."\n";
    $counter = $counter + $steping;
    printSomething($counter, $end, $steping);
}

//Invoke printSomething
printSomething(0,10,2);