<?php

function password_generator($length)
{
    $characters = "'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";
    echo substr(str_shuffle($characters), 0, $length);

    // $lowerCaseChar= "abcdefghijklmnopqrstuvwxyz"; 
    // $upperCaseChar= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // $numbers = '0123456789';
    // $symbols ="$%&\=?!"
}
;

?>