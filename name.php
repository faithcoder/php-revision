<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Last Name">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

function greetings($first_name="Abdullah", $last_name="Arif"){
    echo "Greetings: $first_name $last_name";
}
greetings();
greetings("abrar", "Ayesha");

greetings($first_name, $last_name);

