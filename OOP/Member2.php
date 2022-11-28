<?php

class Member2{
    protected $isLoggedIn=false;

    protected $role; 

    protected $users=[
        ["username"=>"abrar","password"=>"abc","role"=>"admin"],
        ["username"=>"Arif","password"=>"123","role"=>"subscriber"],
        ["username"=>"Ayesha","password"=>"cbr","role"=>"moderator"],
    ];

    public function login($user,$pass){
        foreach($this->users as $user_info){
            extract($user_info);
            if($username==$user && $password==$pass){
                $this->isLoggedIn=true;
                $this->role=$role;
                return true;
            }
        }
        
    }
    function __construct($user,$pass)
            {
                if($this->login($user,$pass)){
                    if($this->role=="subscriber"){
                        echo "You are logged in as Subscriber";
                    }
                    if($this->role=="admin"){
                        echo "You are logged in as Admin";
                    }
                    if($this->role=="moderator"){
                        echo "You are logged in as Moderator";
                    }
                }else{
                    echo "invalid user credentials";
                }
            }
}

// class Role extends Member2{
//     function __construct($user,$pass)
//     {
//         if($this->login($user,$pass)){
//             if($this->role=="subscriber"){
//                 echo "You are logged in as Subscriber";
//             }
//             if($this->role=="admin"){
//                 echo "You are logged in as Admin";
//             }
//             if($this->role=="moderator"){
//                 echo "You are logged in as Moderator";
//             }
//         }else{
//             echo "invalid user credentials";
//         }
//     }
// }

$login = new Member2('Arif','123');