<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    function add($x, $y){
        $sum = $x + $y; 
        echo "Summation is $sum"."</br>";
    }
    add($number1, $number2);

    function minus($x, $y){
        $minus = $x - $y; 
        echo "Minus result is $minus";
    }
    minus($number1, $number2);
}