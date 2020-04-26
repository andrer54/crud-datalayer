<?php

require __DIR__."/../vendor/autoload.php";
/* 
use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();
if($error){
    echo $error->getMessage();
    die();
}
var_dump(true);
 */
use Source\Models\User;

$user = new User();
$list = $user->find()->fetch(true);

foreach($list as $userItem){
    var_dump($userItem->first_name);
}