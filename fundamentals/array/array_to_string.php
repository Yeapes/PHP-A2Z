<?php

$employees = [
    "Yeapes",
    "Aman",
    "Rakib",
    "Tarek",
    "Rakib",
];

// $employee_string = join(', ', $employees);

$employee_string = implode(', ',$employees);`
echo $employee_string;  