<?php

//spaceship operator <=>

// echo (1<=>1),"<br>";
// echo (2<=>1),"<br>";
// echo (1<=>2),"<br>";

// echo ("a"<=>"a"),"<br>";
// echo ("a"<=>"b"),"<br>";
// echo ("b"<=>"a"),"<br>";

switch(340<=>33){
    case "0": echo " You are passed";
    break;
    case "1": echo "you are qualified";
    break;
    case "-1": echo "Rejected, try later";
    break;
}