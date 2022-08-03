<!-- PHP array Types Based on Index: 

1. Numerical/enumerated Array
2. Associative array
3. Hybrid Array  -->

<?php

$number=["one","two","three"]; //index array or numerical array

$abc=["a"=>"America","b"=>"Bangladesh","c"=>"Canada"]; //this is associative array

$letter=["a"=>"America","Bangladesh","Canada"]; //this is hybrid array

$number1=["one",5=>"two","three"];
echo "<pre>";
print_r($number); 
print_r($abc); 
print_r($letter); 
print_r($number1); 
echo "</pre>"; 

?> 



<!-- Arrays Based on Dimension
1. Single Array
2. Nested Array 
-->

 <?php

$countries=[
    "a"=>["America"=>["NewYork","California"]], 
    "b"=>["Africa"=>["Uganda","Congo"]], 
    "c"=>"Canada"
];

echo $countries["a"]["America"][0],"<br>"; //it will show New York
echo $countries["b"]["Africa"][1]; //it will show Congo


?>

<?php

    $abc = [
        "a"=>"Apple",
        "b"=>"Ball",
        "c"=>"Cat",
    ];

    foreach($abc as $val){ //when we need only value
        echo $val,"<br>";
    }

    foreach($abc as $key=>$val){ //when we need key and value both from the array
        echo $key." : ".$val,"<br>";
    }

    foreach($abc as &$val){ //when we use reference '&', then we don't need to return. here $val is working as $abc
        $val=strtoupper($val); //if we write echo here, then it will show output without reference '&'
    }
    print_r($abc);

?>

<?php
//use of extract() function; 

$countries=["a"=>"America","b"=>"Bangladesh","c"=>"Canada"];
extract($countries);
echo $a,"<br>",$b,"<br>",$c,"<br>"; //extract function change the array key as variable

//handling numerical array

$numbers=["a"=>"America",3=>"Bangladesh","Canada"];

extract($numbers, EXTR_PREFIX_ALL,'x');

echo $x_a,"<br>",$x_3,"<br>",$x_4;

//when same array key is exist

$a="Africa";

$numbers=["a"=>"America",3=>"Bangladesh","Canada"];

extract($numbers, EXTR_PREFIX_SAME,'x'); //when array key is same then it will add a prefix 

echo $a,"<br>",$x_a,"<br>",$x_3,"<br>",$x_4,"<br>";




?>

<?php
$students=[
    ["name"=>"mamun", "age"=>10, "address"=>"Dhaka"],
    ["name"=>"wafi", "age"=>6, "address"=>"Narayanganj"],
];

foreach($students as $student){
    extract($student); //here extract function converts array key to variable
    echo $name,"<br>",$age,"<br>",$address,"<br>";
}
?>

<?php

$students = [
    ["Arif",33,"Cantonment"],
    ["Abrar",10,"Cumilla"]
];

foreach($students as list($name,$age,$address)){
    echo $name,"<br>", $age,"<br>", $address,"<br>"; 
}