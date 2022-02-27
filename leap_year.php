<?php

// if Divisiable by 4 ?

// if Divisiable by 100 ?

// if Divisiable by 400 ?

// if all condition is true then it is leap year


$year = 2000;

if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "$year is leap year!";
}elseif($year % 4 == 0 && $year % 100 == 0 ){
    echo "$year is not leap year!";
}elseif($year % 4 == 0){
    echo "$year is leap year!";
}else{
    echo "$year is not leap year!";
}




//another approach

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
     echo "$year is leap year";
} else {
    echo "$year is not leap year";
}
