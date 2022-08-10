<?php

function myClosure($num){
    return function($x) use ($num){
        return $num*$x;
    };
}

$closure=myClosure(10);

echo $closure(2),"<br>";
echo $closure(3),"<br>";
echo $closure(4),"<br>";

$client="Kawser";
$output=function() use ($client){
    echo "Welcome $client";
};
#$output();