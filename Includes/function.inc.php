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
