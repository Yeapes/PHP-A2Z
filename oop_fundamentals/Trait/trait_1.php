<?php


//When if extends parent class & trying to access same name class , then it will call from Useable Trait

trait someFunction{

    public function greet(){
        echo "Greet from somefunction Trait";
    }

    public function sayBye(){
        echo "Good Bye!";
    }
}

class SomeExampleParent{
     
    public function greet(){
        echo "Greet from Some Example Class";
    }
}

class SomeExample extends SomeExampleParent{
    use someFunction;

}

$ob = new SomeExample();

$ob->greet();