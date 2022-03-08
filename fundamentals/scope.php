<?php
 
function doSomething(){
    static $n;
    $n = $n ?? 0; 
    $n++;

    echo $n."\n";
}

doSomething();
doSomething();
doSomething();