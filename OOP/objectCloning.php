<?php

class objectCloning{
    public $name;
    private $mobile; 

    public function __construct($name, $mobile)
    {
        $this->name=$name;
        $this->mobile=$mobile;
    }
}

$obj1 = new objectCloning("Arif","01713456");

echo "<pre>";

print_r($obj1);

$obj2=clone $obj1;

$obj1->name="Abrar";
$obj2->name="Ayesha";

print_r($obj1);
print_r($obj2);

echo "</pre>";
