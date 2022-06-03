
<?php

class ExampleStatic{
    static $goal;
    public static function setGoal($goal){
        self::$goal = $goal;
    }

    public static function getGoal(){
        return self::$goal;
    }
}


ExampleStatic::setGoal("I'm Planning to complete PHP OOP Advance in this month");
echo ExampleStatic::getGoal();