<?php
/**
 * Created by PhpStorm.
 * User: callu
 * Date: 25/05/2018
 * Time: 19:32
 */
session_start();

$user_dat = simplexml_load_file("res/dat/user_dat.xml");

print_r($user_dat);
?>

<form id="loginForm" action="res/scripts/php/login.php" method="post">
    <label for="usernameField">Username:</label><input type="text" id="usernameField" name="username"><br>
    <label for="passwordField">Password:</label><input type="password" id="passwordField" name="password"><br>
    <input type="submit" value="Login">
</form>
