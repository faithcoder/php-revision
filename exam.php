<?php

// function increment($val){
//     $val = $val + 1; 
// }

// $val = 1; 
// increment($val);
// echo $val;



// function increment($val){
//     $val = $val +1; 
// }

// $val = 1; 
// increment(2);
// echo $val; //because we echo only $val so it's showing only 1 from the variable, not the function


// function increment($val){
//     $_GET['m'] = (int)$_GET['m']+1;
// }

// $_GET['m']=1;

// echo $_GET['m'];

// function increment(&$val){
//     return $val + 1; 
// }
// $a = 1; 

// echo increment($a);


$a = 3;

switch($a){
    case 1: echo 'one'; break;
    case 2: echo 'two'; break;
    default: echo 'four'; break;
    case 3: echo 'three'; break;

}