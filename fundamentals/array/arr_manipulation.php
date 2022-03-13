<?php

//array_pop
//array_shift

$programmers = [
    'Yeapes',
    'Aman',
    'Rakib',
    'Tarek'
];


//Shift an element off the beginning of array
$programmer = array_shift($programmers);
// $programmer = array_shift($programmers);
// $programmer = array_shift($programmers);
// $programmer = array_shift($programmers);

//Shift an element off the last of array
$programmer_pop = array_pop($programmers);
 
for ($i = 0; $i < count($programmers); $i++){
    echo $programmers[$i]."\n";
}

//working with array_push, array_unshift

$students = [
    'Ashfaque',
    'Rafi',
    'Boishaki',
    'Hridoy'
];

//Push elements onto the end of array Since 7.3.0 this function can be called with only one parameter.
array_push($students,"Faruk");

//Prepend elements to the beginning of an array Since 7.3.0 this function can be called with only one parameter.
array_unshift($students,"Muktadir");

for ($i = 0; $i < count($students); $i++){
    echo $students[$i]."\n";
}


$students = [
    'Ashfaque',
    'Rafi',
    'Boishaki',
    'Hridoy'
];
