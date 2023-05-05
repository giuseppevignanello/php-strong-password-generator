<?php
session_start();
function password_generator($length)
{
    if (!empty($_GET["length"])) {
        //avoid to show 70 char password long before to the user choice 
        if (!empty($_GET["letters"]) && empty($_GET["numbers"]) && (empty($_GET["symbols"]))) {
            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        } elseif (!empty($_GET["numbers"]) && empty($_GET["letters"]) && (empty($_GET["symbols"]))) {
            $characters = "0123456789";
        } elseif (!empty($_GET["symbols"]) && empty($_GET["numbers"]) && (empty($_GET["letters"]))) {
            $characters = "$%&\=?!";
        } elseif (!empty($_GET["symbols"]) && !empty($_GET["letters"]) && empty($_GET["numbers"])) {
            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";
        } elseif (!empty($_GET["symbols"]) && !empty($_GET["numbers"]) && (empty($_GET["letters"]))) {
            $characters = "0123456789$%&\=?!";
        } elseif (!empty($_GET["letters"]) && !empty($_GET["numbers"]) && (empty($_GET["symbols"]))) {
            $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        } elseif (!empty($_GET["letters"]) && !empty($_GET["numbers"]) && !empty($_GET["symbols"])) {
            $characters = "'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$%&\=?!";
        }

        return substr(str_shuffle($characters), 0, $length);

    }
    // $lowerCaseChar= "abcdefghijklmnopqrstuvwxyz"; 
    // $upperCaseChar= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // $numbers = '0123456789';
    // $symbols ="$%&\=?!"
}
;

?>