<?php

class Group
{

    static function setName()
    {

        //This called early binding will be call Group class getName =  Sceince
        // echo self::getName(); 
        //This called late binding will be call Group class getName =  CSE
        echo static::getName();
    }

    static function getName()
    {
        return "Science";
    }
}


class GroupType extends Group
{

    static function getName()
    {
        return "CSE";
    }
}

// echo GroupType::setName();
echo GroupType::setName();
