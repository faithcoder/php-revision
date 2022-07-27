<!-- PHP array Types Based on Index: 

1. Numerical/enumerated Array
2. Associative array
3. Hybrid Array  -->





<!-- Arrays Based on Dimension
1. Single Array
2. Nested Array 
-->

 <?php
$a = "Africa";
$countries=["a"=>"America", "b"=>"bangladesh", "c"=>"Canada"];

extract($countries, EXTR_PREFIX_SAME, 'x');
echo $a, "<br/>", $x_a, "<br/>", $b; 

?>

<?php

$students=[
    ["name"=>"Mamnu", "age"=>10, "address"=>"Dhaka"];
    ["name"=>"wafi", "age"=>6, "address"=>"Narayanganj"];

]