<?php

// 1. Property Overloading 
//      __set(),__get(),__unset(),__isset()
// 2. Method Overloading
//      __call(), __callStatic()

class PropertyLoading{
    
    private $data=[];

    public function __set($PropertyName,$PropertyValue){
        $this->data[$PropertyName]=$PropertyValue;
    }

    public function __get($name){
        if(array_key_exists($name,$this->data)){
            return $this->data[$name];
        }else{
            echo "404 not found";
        }
    }

    // public function getPropertyValues(){
    //     print_r($this->data);
    // }
}

$object=new PropertyLoading;

$object->name="Arif";
$object->age=33;

#echo $object->getPropertyValues();
echo $object->name,"<br>";
echo $object->age;