<?php
function mango(){
    echo "mango is the first function here";
    echo "</br>";
}

function orange($arg=""){
    echo "It's orange function with $arg";
}

$func1 = "mango";
$func1(); //here mango function is working with func1 variable

$func2 = "orange";
$func2("argument value"); //we can also pass any argument value like this