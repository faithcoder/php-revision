<?php
//formula 1
for($i=1; $i<=10; $i++){
    echo $i; 
}

//formula 2
for($i=1; ;$i++){
    if($i>10){
        break;
    }
    echo $i; 
}

//formula 3
$i = 1; 

for(;;){
    if($i>10){
        break;
    }
    echo $i, " ";
    $i++;
}

//another examples

for($i=1,$j=0;$i<=10;$j+=$i,print$i,$i++);

for($i=1,$j=0;$i<=10;$i++){
    $j+=$i;
    echo $i,$j,"<br>";
}

//examples - continue

for($i=1;$i<=10;$i++){
    if($i==6){
        #continue;
        break;
    }
    echo $i,"<br>"; //if we use continue here, it will print except 6
    //if we we use break, then it will print upto 5;
}

$x=1;
while($x<=10){
    echo $x++;
}