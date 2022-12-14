<?php

$host = "localhost:3306";
$dbName = "nombres";
$userName = "root";
$password = "12345678";

$mysqli = new mysqli(
    hostname: $host,
    username: $userName,
    password: $password,
    database: $dbName
);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
} else {
    echo "database is connected!";
}

return $mysqli;

?>