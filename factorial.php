<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="" method="post">

    <input type="number" name="number" placeholder="Enter a Value">
    <input type="submit" name="submit">

    </form>
    
</body>
</html>

<?php
 $num = $_POST['number'];
 $factorial = 1; 

 if(isset($_POST['submit'])){

    for($i = $num; $i>=1; $i-- ){
         $factorial = $factorial * $i;
    }
 }

 echo "<h3>"."FACTORIAL OF $num is $factorial"."</h3>";