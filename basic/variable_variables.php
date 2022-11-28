
<?php
//1st example

$first="second";
$second="first";
#$$$country="Uganda";

echo $$$first,"<br>";

?> 


<?php
//2nd example

$car = "nissan";
$nissan = "xtrail";
echo $$car,"<br>";
?>


<?php
//3rd example 

$list=[
    'name'=>'Arif',
    'email'=>'arif@gmail.com',
    'phone'=>'123-456-89',
];

foreach($list as $k=>$value){
    $$k=$value;
}

echo $name,"<br>";
echo $email,"<br>";
echo $phone,"<br>";
?>

<?php
//4th example 

$one="two";
$two="three";
$three="four";
$four="five";

echo $$$$one,"<br>";//it will print five
?>

<?php

//5th example

$a='hello';
$$a='world';
echo "$a ${$a}","<br>";
echo "$a $hello";


?>
