<?php

class TestException extends Exception{

}

class ExampleException extends Exception{}
class SampleException extends Exception{}

function throwException(){
    throw new ExampleException();
}
 

try {
    
    throwException(); 
} catch (TestException $te) {
     echo "Test Exception";
}catch(ExampleException $ee){
    echo "Example Exception";
}catch(SampleException $s){
    echo "SampleException Exception";
}