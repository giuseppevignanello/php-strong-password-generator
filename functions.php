<?php
session_start();

function password_generator($length, $characters)
{
    return substr(str_shuffle($characters), 0, $length);
}


// $lowerCaseChar= "abcdefghijklmnopqrstuvwxyz"; 
// $upperCaseChar= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
// $numbers = '0123456789';
// $symbols ="$%&\=?!"
;

?>