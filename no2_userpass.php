<?php

function is_username_valid($username)
{
    $regex_username = '/^[a-zA-Z]([a-zA-z0-9_-]){5,9}/';
    if (preg_match($regex_username, $username)) {
        echo 'true<br>';
    } else {
        echo 'false<br>';

    }
}


function is_password_valid($password)
{
    $regex_password = '/^([a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[#$^+=!*()@%&]).{8,}$/';
    if (preg_match($regex_password, $password)) {
        echo 'true<br>';
    } else {
        echo 'false<br>';
    
        }
}
// Test
is_username_valid('Xrutaf888');
// return true;
is_username_valid('1Diana');
// return false;
is_password_valid('passW0rd=');
// return true;
is_password_valid('C0d3YourFuture!#');
// return false;