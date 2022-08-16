<?php

// class Students{
    
//     public $id;

//     private $result;

//     protected $subject; 

//     private $data=[
//         ["id"=>1,"name"=>"Arif","subject"=>"Math"],
//         ["id"=>2,"name"=>"Abrar","subject"=>"English"],
//         ["id"=>3,"name"=>"Ayesha","subject"=>"CSE"],
//     ];

//     private function array_search_by_value($searchVal,$columnName){
//         $found_key = array_search($searchVal,array_column($this->data,$columnName));
//         $this->result=$this->data[$found_key];
//     }

//     public function getStudentInfo($id){
//         $this->array_search_by_value($id,"id");
//         return $this->result;
//     }
// } 

// $obj=new Students;

// print_r($obj->getStudentInfo(3));

?>

<?php
class Students{
    private $searchItem;
    private $searchColumn;
    private $data=[
        ["id"=>1,"name"=>"Rashedul","subject"=>"Math"],
        ["id"=>2,"name"=>"Hasan","subject"=>"English"],
        ["id"=>3,"name"=>"Bakar","subject"=>"Bangla"],

    ];
    function searchById($row){
        return strtolower($row[$this->searchColumn]) == strtolower($this->searchItem);
    }

    public function getStudentInfo($column,$val){
       $this->searchItem=$val;
       $this->searchColumn=$column;

       return array_values(array_filter($this->data,[$this,"searchById"]))[0]; 

    } 

}

$obj=new Students;

print_r($obj->getStudentInfo("name","bakar"));