<?php

// php array general functions

$fruits = [
    "a"=>"Apple",
    "b"=>"Ball",
    "c"=>"Cat",
];

echo count($fruits),"<br>"; //count function shows the value of an array
echo current($fruits),"<br>"; //current function shows current value or first value of array
echo next($fruits),"<br>"; //next function shows next value 
echo prev($fruits),"<br>"; //prev function shows previous value
echo end($fruits),"<br>"; //end function shows last value of array
echo reset($fruits),"<br>"; //reset function start showing value from first value

echo key($fruits); //it shows current key of array

?>

<?php

$number = [1,3,4,2,5,6,2,5,6,8,8,7,6,6,9,1,2,3,4];
echo "<pre>";
print_r(array_count_values($number)); //একটা এ্যারেতে একই রকম কতগুলা ভ্যালু আছে তা গননা করার জন্য
echo "</pre>";
?>



<?php

//foreach, extract and list ব্যতিত array key and value বের করার কৌশল
$countries = [
    "a"=>"America",
    "b"=>"Belgium",
    "c"=>"Croatia",
];
reset($countries);

for($i=0;$i<count($countries);$i++){
    echo key($countries)."=>".current($countries),"<br>";
    next($countries);
}
