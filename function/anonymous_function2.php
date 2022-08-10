<?php

$students=[
    ["name"=>"Moin Ahmed", "age"=>22],
    ["name"=>"Arif", "age"=>33],
    ["name"=>"Abrar", "age"=>25],
];

usort(
    $students,
    function($studentA, $studentB){
        return($studentA['age']>$studentB['age'])?-1:1;
    }
);

foreach ($students as $val){
    echo "$val[name] is $val[age] years old <br>";
}