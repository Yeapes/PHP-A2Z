<?php

$arr = [
    'color' => 'red',
    'size' => 'M',
    'width' => '1.4',
    'height' => '5.6 inch'
];

foreach($arr as $ar){
    echo $ar."\n";
}


$value = array_values($arr);

for ($i = 0; $i < count($value); $i++){
    echo $value[$i]."\n";
}

$arr['color'] .= ",Green";

print_r($arr);