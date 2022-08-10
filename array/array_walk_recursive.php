<?php 

$fruits=[
    'sweet'=>['a'=>'apple','b'=>'banana'],
    'sour'=>'lemon'
];

function test_print($item,$key){
    echo "$key holds $item \n";
}

echo "<pre>";
    array_walk_recursive($fruits,"test_print");
echo "</pre>";