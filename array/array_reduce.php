<?php

$a=[3,4,2,1,5,6,7];

// echo array_reduce($a,function($carry,$item){
//     $carry+=$item;
//     return $carry;
// });

// echo array_reduce($a,function($carry,$item){
//     $carry*=$item;
//     return $carry;
// },1); //Note: when we need multiply remember to add 1 here


//array_chunk - একটা এ্যারে কে একাধিক এ্যারে তে ভাগ করা 

echo "<pre>";
#print_r(array_chunk($a,2,true)); //এখানে true লিখলে ক্রমানুযায়ী ইনডেক্স আসবে
print_r(array_slice($a,2));
print_r(array_slice($a,-3,1)); //মাইনাস এড করলে শেষের দিক থেকে এ্যারে আউটপুট দেখাবে