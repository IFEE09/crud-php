<?php

$host = "localhost:3306";
$dbName = "php_mysql_crud";
$userName = "root";
$password = "12345678";

$conn = new mysqli(
    hostname: $host,
    username: $userName,
    password: $password,
    database: $dbName
);

if ($conn->connect_errno) {
    die("Connection error: " . $conn->connect_error);
} else {
    echo "database is connected!";
}

return $conn;

?>