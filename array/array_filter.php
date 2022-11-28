<?php
/*
array_filter($array, call_back_function)
*/

$number = range(1, 20);

function odd($val){
    return $val%2==1;
}
echo "<pre>";
print_r(array_filter($number, "odd"));
echo "</pre>";
?>

<br>
<?php


/** even number output */

$number = range(1,10);

function even($val){
    return $val%2==0;
}

echo "<pre>";
print_r(array_filter($number,"even"));
echo "</pre>";