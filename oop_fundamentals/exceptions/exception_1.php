<?php

class JobPost{

    private $name, $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
        if($age < 18){
            throw new Exception("Age must be greater than 18", 1); 
        }
    } 
}

try {
    //code...
    $j = new JobPost("Yeapes",17);
} catch (\`Throwable` $th) {
    //throw $th;
    echo $th->getMessage();
}

