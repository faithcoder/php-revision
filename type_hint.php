<?php

//type hinting 
//to define and predict input and output of a function
//there are two types type hinting 
// 1. Argument type hinting and 2. Return type hinting


//ARGUMENT TYPE HINTING
// function myFunc(array $num){     //এখানে B একটা object হিসেবে কাজ করছে
//     //var_dump($num);
//     return $num;
// }
// class A {
//     public $y=50;
// }
// class B {
//     public $x = 30; 
// }

// try{
//     var_dump(myFunc([5, 6, 7.7, "arif"]));
// }catch(TypeError $error){   //এখানে Typeerror php এর একটা ডেফল্ট ফাংশন
//     echo "Error shows".$error->getMessage();
// }

//RETURN TYPE HINTING
function myFunc(A $num):int{     //এখানে A একটা object হিসেবে কাজ করছে
    //var_dump($num);
    //return "6.5";\
    return (int)$num->num2;
}
class A {
    public $y=50;
    public $num2 = "12"; //as a string 
}
class B {
    public $x = 30; 
}

try{
    var_dump(myFunc(new A));
}catch(TypeError $error){   //এখানে Typeerror php এর একটা ডেফল্ট ফাংশন
    echo "Error shows".$error->getMessage();
}

