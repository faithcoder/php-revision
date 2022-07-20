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
