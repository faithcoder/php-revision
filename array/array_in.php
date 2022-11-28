<?php

$car = [
    "BMW" => "Germany",
    "Toyota" => "Japan",
    "Proton" => "Malaysia",
    "Kia" => "S.Korea",
    "Tata" => "India",
];

//$car = array("BMW", "Toyota", "55", "Honda", "Hyundai");

if(in_array(55, $car, true)){       // in_array function always return 1 or o, 1 is true and 0 is false
    echo "Found successfully";
}else {
    echo "can't find";
}

echo array_search("Japan", $car);

$data = array(
    array('a','b'),
    array('p','r'),
    'o'
);

if(in_array(array('a','b'), $data, true)){       // in_array function always return 1 or o, 1 is true and 0 is false
    echo "Found successfully";
}else {
    echo "can't find";
}