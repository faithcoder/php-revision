<?php

$i=2;
switch($i){
    default:
        echo "nothing";
        break;
    case 1:
        echo "this is one";
        break;
    case 2:
    case 3:
        echo "This is two or three";
        break;
    case 5:
        echo "this is five";
        break;
}