
<?php

$x = 5;

$y = 8;

$check = $x <=> $y;

if ($check == 1){
    echo "$x is greater than $y";
}elseif ($check == 0){
    echo "$x is equal to  $y";
}else{
    echo "$x is less than $y";
}


echo PHP_EOL;
//Null check

$default = 21.3;

$long = null;

$lat = $long ?? $default;

echo $lat;