<?php

    //database connection details
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'gorgeous_cupcakes';

    try {
        //connect to the database
        $conn = new PDO( "mysql:host = $host; dbname = $database", $user, $password);

        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
     }

?>