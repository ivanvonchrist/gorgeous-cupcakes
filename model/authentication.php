<?php

    //start session management
    session_start();

    //connect to the database and retrieve functions
    require('../model/database.php');
    require('../model/functions_users.php');

    //retrieve the username and password entered into the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    //call the retrieve_salt() function
    $result = retrieve_salt($username);

    //retrieve the salt from the database
    $salt = $result['salt'];

    //generate the hashed password with the salt value
    $password = hash('sha256', $password.$salt);

    //call the login() function
    $count = login($username, $password);

    //if a record matches the user input
    if($count == 1) {
        //begin the user session
        $_SESSION['user'] = $username;
        //redirects to the user account
        header('location:../your-account/');
    } else {
        //redirect to login.php
        header('location:../login?error');
    }
?>