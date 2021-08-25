<?php

function validateUser ($user){

  
    $errors = array();

    if(empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if(empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    if(empty($user['password'])) {
        array_push($errors, 'Passoword is required');
    }


    if($user['repeatpassword'] !==$user['password'] ) {
        array_push($errors, 'Password do not match');
    }

    $exisitingUser = selectOne('users', ['email' => $user['email']]);
    if ($exisitingUser){
        array_push($errors, 'This email is already taken!');
    }

    return $errors;
}



function validateLogin ($user){

  
    $errors = array();

    

    if(empty($user['email'])) {
        array_push($errors, 'Email is required');
    }


    if(empty($user['password'])) {
        array_push($errors, 'Passoword is required');
    }

    return $errors;
}