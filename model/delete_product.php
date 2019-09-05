<?php

    //connect to the database and include alert function
    require('../model/database.php');

    //parse URL to get id of the product

    $id = $_GET['id'];

    //insert into database

    $sql = "DELETE FROM gorgeous_cupcakes.products WHERE product_id='$id'";

    $conn->exec($sql);

    //redirect the user to success page

    $params = $id . '&success';
    header('location:../../delete-product?id='.$params);

?>