<?php

// function makeGreetings($name, $timeOfDay){
//     return $timeOfDay." ".$name."!";
// }

// echo makeGreetings("Akramul","Good Morning");

// $makeGreeting = function ($name, $timeOfDay){
//     return "Good $timeOfDay, $name!";
// };

// echo $makeGreeting("Rana", "Morning");


//lambda function
function shout($message){
    echo $message();
}

shout(function(){
    return "Hello World";
});

?>

/* function with array */

<?php

$raffleDraw=[
    function(){
        echo "You've win a Car";
    },
    function(){
        echo "You've win a Bike";
    }, 
    function(){
        echo " You've win a TV";
    },
    function(){
        echo "You've win a Fridge";
    }
];

$choice=rand(0,3);
$raffleDraw[$choice]();

/* dsfasd */
?>

<?php

$numbers = range(1,20);

//1.    expert trick to find numbers

// foreach(array_filter($numbers, function($val) {return $val%2==0;}) as $val){   
//          echo $val,"<br>";
//     };

//2.    advanced trick to find numbers
// $even = array_filter($numbers, function($val){  //advanced way
//     return $val%2==0;
// });

// foreach($even as $val){
//     echo $val,"<br>";
// }

//3.    Easy way to find numbers

function getEven($val){
    return $val%2==0;
}

$even = array_filter($numbers, "getEven");

foreach($even as $val){
    echo $val ,"<br/>";
}
