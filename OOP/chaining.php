<?php

class Person{
    private $name="";
    private $age="";

    public function setName($name=""){
         $this->name=$name;
         return $this;
    }
    public function setAge($age="20"){
        $this->age=$age;
        return $this;
    }
    public function getInfo(){
        return "hello my name is ".$this->name." and he is ".$this->age." years old";
    }
}

$person = new Person;

// $person->setName("Abrar");
// $person->setAge(3);
// echo $person->getInfo();
echo $person->setName("Arif")->setAge()->getInfo();