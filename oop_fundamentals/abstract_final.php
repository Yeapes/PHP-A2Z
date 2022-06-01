<?php

abstract class Animal{

    final function geet(){
        echo "meoow";
    }
}

class Cat extends Animal{

   
}

$cat = new Cat();

$cat->geet();