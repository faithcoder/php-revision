<?php

class Math{
    public static $val;

    public static function init($var){
        static::$val=$var;
        return new static;
    }

    public static function add($var){
        static::$val+=$var;
        return new static;
    }
    public static function sub($var){
        static::$val-=$var;
        return new static;
    }
    public static function out(){
        return static::$val;
        
    }

}



echo Math::init(10)->add(2)->sub(5)->out();
#echo Math::$val;
echo Math::sub(2)->out();