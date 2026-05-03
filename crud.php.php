<?php
require_once('./config/Database.php');
require_once('./classes/User.php');

$database = new Database();
$db = $database->connect();

$user = new User($db);

$user->name  = 'Nidhi Gupta';
$user->email = 'nidhi9060@gmail.com';
$user->password = 'Sherawali@9060';
$user->course = 'Polytechnic';
$user->profile_image = 'uploads/profile.png';

$status = $user->create();

    if($status){
        echo "Data save successfully..!";
    }else{
        echo"Erro creating save data..!";
    }
