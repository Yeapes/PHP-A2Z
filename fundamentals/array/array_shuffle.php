<?php

$numbers = range(40, 72);

$rand = mt_rand(0,32);

$take_rand_value = $numbers[$rand];

//Guess a Head or Tail
if($take_rand_value % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}


//now we use array_shuffle
echo PHP_EOL;
 shuffle($numbers);

echo $numbers[1];


$asc_array = array('a' => 'Random', 'b' => 'Hello', 'd' => 'Dhaka');

$random_key = array_rand($asc_array);

echo PHP_EOL;
echo $asc_array[$random_key];
