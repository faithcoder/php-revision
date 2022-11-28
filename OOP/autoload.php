<?php
//formula 1
// spl_autoload_register(function($className){
//     include_once "$className.php";
// });


//formula 2
function classAutoload($className){
    include_once "$className.php";
}
spl_autoload_register("classAutoload");


$member = new Member; 

$member->username = "Arif";

$member->login();
$member->logout();

echo $member->username." is ".($member->isLoggedIn()?"logged in!":"logged out!")."<br>";

$admin = new Administrator;
$admin->username="Abrar";

$admin->login();
$admin->logout();

echo $admin->username." is ".($admin->isLoggedIn()?"logged in as Administrator!":"Admin but logged out!");

$admin->createForum("faithCoder");
$admin->banMember($member);