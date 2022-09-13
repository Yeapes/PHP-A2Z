<?php

interface BaseStudent{

    function displayName();
}

class Student implements BaseStudent{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function displayName(){
        echo $this->name;
    }

}


class ImproveStudent implements BaseStudent{
    private $name;
    private $title;

    function __construct($name,$title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName(){
        echo $this->name." ".$this->title;
    }

}

class StudentManager{

    function introduceStudent(BaseStudent $student){
        $student->displayName();
    }
}
$student = new Student("Yeapes");
$improve_student = new ImproveStudent("Yeapes","CSE");
$st = new StudentManager();

$st->introduceStudent($student);
$st->introduceStudent($improve_student);