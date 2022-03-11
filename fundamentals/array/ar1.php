<?php

$data = array(
    "Rokib",
    123,
    12.2
);

//Count how many elements are in the array
$count_total = count($data);

for ($i = 0; $i < $count_total; $i++){
    echo $data[$i]."\n";
}


$ar = array(
    array('Yeapes',22,'Student'),
    array('Yeapes',22,'Student'),
    array('Yeapes',22,'Student'),
);

print_r($ar);