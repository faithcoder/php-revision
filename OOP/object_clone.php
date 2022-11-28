<?php

class objectCloning{
    public $name;
    private $mobile;

    public function __construct($name,$mobile)
    {
        $this->name=$name;
        $this->mobile=$mobile;
    }

    public function __clone(){
        $this->mobile="987654321";
    }
}

$object1=new objectCloning("Arif","123456");

$object2=clone $object1;

$object2->name="Abrar";


echo "<pre>";

print_r($object1);
print_r($object2);


echo "</pre>";