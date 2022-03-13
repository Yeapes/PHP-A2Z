<?php

$students = array(
    "name" => array(
        "Yeapes",
        "Raihan",
        "Rakib",
        "Rony",
    ),
    "age" => array(
        "22",
        "22",
        "25",
        "27",
    ),
    "institution" => array(
        "Bangladesh University",
        "European Universtiy",
        "Dhaka University",
        "Bangladesh University & Engineering Technology",
    )
);

echo $students['institution'][0]."\n";

$data = [
    [11,12,13,15],
    [11,12,13,15,124,3434,[1243,4564,243]],
    [11,[1234,127,93,87]],
];

// print_r($data);
echo $data[1][6][0];