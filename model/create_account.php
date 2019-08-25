<?php

//connect to the database
require('../model/conn.php');

//retrieve user input from form

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//check password length

if (strlen($password) < 8)
{
echo "<p>Password must be 8 characters or more.</p>";
exit();
}

//salt the password

$salt = md5(uniqid(rand(), true));
$password = hash('sha256', $password.$salt);

//insert into database

$sql = "INSERT INTO gorgeous_cupcakes.user (first_name, last_name, email, username, salt, password) VALUES ('$firstName', '$lastName', '$email', '$username', '$salt', '$password')";

$conn->exec($sql);

header('location:../login/');

?>