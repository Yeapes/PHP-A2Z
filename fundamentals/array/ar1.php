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

$ar3 = array(
     array(1,22,12.3), 
     array(1,22,12.3), 
     array(1,22,12.3), 
);

print_r($ar3);

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));


//Compare two array return difference 
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
