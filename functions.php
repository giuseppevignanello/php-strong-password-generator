<?php
session_start();
function password_generator($length)
{
    if (!empty($_GET["length"])) {
        //avoid to show 70 char password long before to the user choice
        $characters = "'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";
        return substr(str_shuffle($characters), 0, $length);
    }
    // $lowerCaseChar= "abcdefghijklmnopqrstuvwxyz"; 
    // $upperCaseChar= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // $numbers = '0123456789';
    // $symbols ="$%&\=?!"
}
;

?>