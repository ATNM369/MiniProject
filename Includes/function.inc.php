<?php

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-aA-Z0-9]*/", $username)) {
     $result = true;

    } else {
        $result = false;
    }
    return $result;
}


function pwdMatch($pwd , $pwdRepeat){
    $result;
    if ($pwd !== $pwdRepeat) {
       $result = true;

    } else {
        $result = false;
    }
    return $result;
}

function isStrongPassword($password) {
    // Minimum password length
    $minLength = 8;

    // Check if the password length is at least the minimum length
    if (strlen($password) < $minLength) {
        return false;
    }

    // Check if the password contains at least one uppercase letter
    if (!preg_match('/[A-Z]/', $password)) {
        return false;
    }

    // Check if the password contains at least one lowercase letter
    if (!preg_match('/[a-z]/', $password)) {
        return false;
    }

    // Check if the password contains at least one digit
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }

    // Check if the password contains at least one special character
    // You can customize the list of special characters as needed
    if (!preg_match('/[@#$%^&+=]/', $password)) {
        return false;
    }

    // If all checks pass, the password is considered strong
    return true;
}
