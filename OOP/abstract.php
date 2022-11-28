<?php

abstract class myAbstract {
    abstract protected function getName($name);
}

class myClass extends myAbstract{
    public function getName($name){
        return "Welcome $name!";
    }
}

$obj=new myClass;
echo $obj->getName("Arif");