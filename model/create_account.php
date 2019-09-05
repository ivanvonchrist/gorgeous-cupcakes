<?php

    //connect to the database
    require('../model/database.php');

    //retrieve user input from form

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //check the e-mail is valid with filter_var and if not return an error

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('location:../create-account?error=1');
        exit;
    }

    //check the password is at least 9 characters in length and if not return an error

    if (strlen($password) < 9) {
        header('location:../create-account?error=2');
        exit();
    }
    
    //check that no fields are empty
    if (empty($firstName) or empty($lastName) or empty($email) or empty($username) or empty($password)) {
        header('location:../create-account?error=3');
        exit;
    }

    //salt the password

    $salt = md5(uniqid(rand(), true));
    $password = hash('sha256', $password.$salt);

    //insert into database

    $sql = "INSERT INTO gorgeous_cupcakes.user (first_name, last_name, email, username, salt, password) VALUES ('$firstName', '$lastName', '$email', '$username', '$salt', '$password')";

    $conn->exec($sql);

    header('location:../login?success');

?>