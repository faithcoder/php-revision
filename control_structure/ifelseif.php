<?php

// $number = false;

// if($number!= true){
//     echo "yes";
// }

if(isset($_POST['submit'])){

    $age = $_POST['age'];

    if($age > 0 && $age <= 15){
        echo "You are child";
    }elseif($age > 15 && $age <=25){
        echo "You are Young";
    }elseif($age > 25 && $age <= 35){
        echo "You are old enough";
    }
}



?> 

<form action="" method="post">
    <input type="number" name="age" value="<?php echo $age; ?>">
    <input type="submit" name="submit">
</form>

<br>
<br>
<br>

<?php
$number = 5; 
if($number==5):?>
    Number is equal to Five

<?php endif; ?> 
<br>
<br>
<br>
<br>
<?php
$usd = 100; 

if($usd == 10): ?> 
this is your minimum income 

<?php
 
elseif($usd == 50): ?> 
this is your average income 

<?php 
elseif ($usd == 100): ?>
This is passive income 

<?php 
else: ?> 
Not in Good Income
<?php endif; ?> 