<?php 

// class Anonymous{
//     public function test(){
//         return "This is test message";
//     }
// }

// $object=new Anonymous;
// echo $object->test();

class Test{

}

interface testInterface{

}

trait testTrait{

}

$message="this is test message";

$object=(new class($message) extends Test implements testInterface{

    use testTrait;

    public function __construct($message)
    {
        echo $message,"<br>";
    }

    public function log(){
        return "This is log message";
    }
});

echo $object->log();