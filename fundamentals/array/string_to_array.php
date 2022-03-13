<?php

//String to array using explode given delimeter , seperator
$employees = explode(', ','Yeapes, Aman, Rakib, Tarek, Ishrat');

print_r($employees);

$employees = preg_split('/(, |,)/','Yeapes, Aman, Rakib, Tarek, Ishrat,zubair');

print_r($employees);