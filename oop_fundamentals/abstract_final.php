<?php


// A abstract final function not permitted to other class to to override it, that's the reason we are using the

abstract class Animal{

    final function geet(){
        echo "meoow";
    }
}

class Cat extends Animal{

   
}

$cat = new Cat();

$cat->geet();