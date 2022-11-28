<?php

// class Anonymous{
//     public function test(){
//         return "This test function";
//     }

// }

// $obj=new Anonymous;
// echo $obj->test();

class Test{

}

interface testInterface{

}

trait testTrait{

}

$message="This is test message";

$object=(new class($message) extends Test implements testInterface{

    use testTrait;

    public function __construct($message)
    {
        echo $message,"<br>";
    }
    public function log(){
        return "This is log function";
    }
});

echo $object->log();