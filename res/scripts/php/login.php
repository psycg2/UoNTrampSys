<?php
/**
 * Created by PhpStorm.
 * User: callu
 * Date: 25/05/2018
 * Time: 19:47
 */

session_start();
include "obj/User.php";


$user_dat = simplexml_load_file("../../dat/user_dat.xml");

$current_user;

foreach ($user_dat->user as $user){
    if($_POST["username"] == $user->username){
        $current_user = new User((int)$user->id, (String)$user->username, (String)$user->password);
        $current_user->first_name = (String)$user->firstName;
        $current_user->last_name = (String)$user->lastName;
        break;
    }
}

if($current_user != null){
    $_SESSION["current_user"] = $current_user;
} else{

}

header("Location: /welcome.php");