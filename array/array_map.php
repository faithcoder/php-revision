<?php

function cube($n){
    return($n*$n*$n);
}

$number=[1,2,3,4,5,6,8];

$newNumber = array_map("cube",$number);

echo "<pre>";
print_r($newNumber);
echo "</pre>";
?>

<?php
$bangla=["হোম","আমাদের সম্পর্কে","সেবাসমূহ","যোগাযোগ"];
$english=["Home","About Us","Services","Contact Us"];

function showBangla($default, $translated){
    return "$default : $translated";
}

echo "<pre>";
print_r(array_map("showBangla",$english,$bangla));
echo "</pre>";