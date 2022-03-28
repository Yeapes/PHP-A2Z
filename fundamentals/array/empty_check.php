<?php

$name = 0;

if (isset($name)){
    echo "Set value\n";
}else {
    echo "Not set value\n";
}

if (empty($name)){
    echo "Empty\n";
}else{
    echo "Not empty\n";
}

//Check

if (isset($name) && (is_numeric($name)) && $name !=""){
    echo "Set value";
}else{
    echo "Not set";
}

