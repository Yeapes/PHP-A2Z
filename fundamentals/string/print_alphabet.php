<?php


for($i = 65; $i < 122; $i++){

    if($i == 91 || $i == 92 || $i == 93 || $i == 94 || $i == 95 || $i == 96 ){
        continue;
    }
    $char = chr($i);
    echo $char."\n";
            
}