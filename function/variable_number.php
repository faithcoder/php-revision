<?php

function add(...$number){
    $sum = 0;
    foreach($number as $n){
        $sum += $n; 
    }
    return $sum;
}

echo add(4, 5, 6, 7);