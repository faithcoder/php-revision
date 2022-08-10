<?php
$a = &$b;
$a = "america";
echo $b;

/** refenence function */
function sum(&$value){
    $value=10;
}
$a=5;
sum($a);
echo $a;

/**Reference function with return */
//usually reference function is used to call one value with two different name;

class Alpha {

    public $value = 42; 

    public function &getValue(){
        return $this->value;
    }
}

$obj = new Alpha; 
$myValue = &$obj->getValue();
$obj->value = 2; 

echo $myValue;

/**unsetting reference  */

$a = 1; 
$b = &$a;
unset($a);  //here, we can unset the value from both side $b and $a; 
echo $b;

/** unset global function */

