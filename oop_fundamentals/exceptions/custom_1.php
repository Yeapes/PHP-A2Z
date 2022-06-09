<?php

class TestException extends Exception{

}

class ExampleException extends Exception{}

function throwException(){
    throw new ExampleException();
}
 

try {
    //code...
    throwException();
   
} catch (TestException $te) {
     echo "Test Exception";
}catch(ExampleException $ee){
    echo "Example Exception";
}