<?php
use LDAP\Result;

include("db.php");

if(isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title . ' ' . $description;

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $conn = require __DIR__ . "/db.php";
    $result = mysqli_query($conn, $query);
    
    if(!$result) {
        die("Query Failed");
    } else {
        echo "saved";
    }
}

?>