<?php
//database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'gorgeous_cupcakes';

//connect to the database
$conn = new PDO( "mysql:host = $host; dbname = $database", $user, $password);
?>