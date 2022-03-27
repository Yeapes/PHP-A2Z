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

$json_encoded_data = json_encode($students);

print_r($students);