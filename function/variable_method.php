<?php

class Car {
    private $Engine = "Hello from private class";

    public function toyota(){
        $name = "Engine";
        echo $this->$name; //if we write echo $name without paretheses, it will show output from private class above;
        echo "<br/>";
        $this->$name(); // if we mention $name() with paretheses it will show output from engine() function below;
    }

    public function engine(){ //engine function is called above as $name variable;
        echo "this is engine";
    }
}

$obj = new Car; //object created for class Car;
$func = "toyota"; // toyota function is called here as $func variable;
$obj->$func(); // so we can call toyota function as $func() variable;