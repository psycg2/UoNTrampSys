<?php
/**
 * Created by PhpStorm.
 * User: callu
 * Date: 25/05/2018
 * Time: 20:17
 */

class User {
    var $id;
    var $username;
    var $password;
    var $first_name;
    var $last_name;

    function __construct($id, $username, $password){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }
}