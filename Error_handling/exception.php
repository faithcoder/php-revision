<?php

function checknum($number){
    if($number<=0){
        throw new Exception("Please provide positive number",102);
    }return $number/2;
}

try{
    echo checknum(4);
}

catch(Exception $e){
    echo "catch exception here";
}