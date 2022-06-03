
<?php

class ExampleStatic{
    static $goal;
    public static function setGoal($goal){
        self::$goal = $goal;
    }

    public static function getGoal(){
        return self::$goal;
    }

    public static function doSomething(){
        echo "Do something from exampleStatic";
    }

}

class DoSome extends ExampleStatic{
    public static function doSomething()
    {
        echo "Do something from DoSome";
        echo PHP_EOL;
        parent::doSomething();
    }
}


ExampleStatic::setGoal("I'm Planning to complete PHP OOP Advance in this month");
echo ExampleStatic::getGoal();

echo PHP_EOL;
DoSome::doSomething();