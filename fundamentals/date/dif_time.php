
<?php

// $dt_one = mktime(0,0,0,11,1,2020);

// $dt_two = mktime(0,0,0,10,30,2020);

// $dif_time = ($dt_one - $dt_two)/(24*60*60);

// echo $dif_time;



//Get my age
$dt_one = mktime(0,0,0,3,9,2000);

$dt_two = mktime(0,0,0,5,24,2022);

$dif_time = ($dt_two -  $dt_one )/(24*60*60)/365;

echo $dif_time;