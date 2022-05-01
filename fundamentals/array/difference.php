<?php

$data1 = ['a' => 'Apple', 'b' => 'Banana', 'c' => 'Cocroach','d' => 'doodle','m' => 'Mango'];

$data2 = ['a' => 'Apple', 'b' => 'Banana', 'c' => 'Coca','d' => 'dish','m' => 'Mango'];

// now we are find common data from $data1 compare with $data2

$common = array_intersect($data1, $data2);

// also we can compare key & value array_intersect_assoc()
print_r($common);

$diff = array_diff($data1, $data2);

print_r($diff);
