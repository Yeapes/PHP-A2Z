<?php

$arr1 = ["University","age"];

$arr2 = ["Bangladesh University",22];

$arr_combine = array_combine($arr1,$arr2);

print_r($arr_combine);



$random = ["method","token","charge_id","payment_id"];

$r1 = array_slice($random,0,3);
$r2 = array_slice($random,3);

$r_merge = array_merge($r1,$r2);

print_r($r_merge);