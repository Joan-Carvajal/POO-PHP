<?php


include 'person.php';
include 'admin.php';
include 'user.php';



$user = new User;
$user->type=new Admin;
echo $user->type->greet();

?>