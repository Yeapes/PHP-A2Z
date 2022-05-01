<?php

$data = ['a'=>'Apple','b'=>'Banana','c'=>'Pineapple','d'=>'Watermelon'];
$numbers = [12, 15, 20, 15, 19];

//Now we are gonna find a value in numbers array if the value is live we can simply print the value is found

if(in_array(22, $numbers)){
    echo "12 Is Found";
}else{
    echo "12 Not found in the array";
}


// Search and find out array offset from array
echo PHP_EOL;
$offset = array_search('Apple',$data);

echo $offset;

echo PHP_EOL;
// Check whether key exists or not 

if(key_exists('c',$data)){
    echo "key c is found";
}