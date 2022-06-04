<?php

class MyClass{

    //In class constant always static scope
    const CITY = "Maijdee";

    public function sayCity(){
        echo "My city is ".self::CITY;
    }
}

$mycl = new MyClass();
echo $mycl->sayCity();

echo PHP_EOL;

echo MyClass::CITY;