<?php
//create a function to retrieve salt
function retrieve_salt($username)
{global $conn;
$sql = 'SELECT * FROM gorgeous_cupcakes.user WHERE username = :username';
$statement = $conn->prepare($sql);
$statement->bindValue(':username', $username);
$statement->execute();
$result = $statement->fetch();
$statement->closeCursor();
return $result;
}

//create a function to login
function login($username, $password)
{
global $conn;
$sql = 'SELECT * FROM gorgeous_cupcakes.user WHERE username = :username AND password = :password';
$statement = $conn->prepare($sql);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();
$count = $statement->rowCount();
return $count;
}
?>