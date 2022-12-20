<?php
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query Failed");
    } else {
        header("location: index.php");
    }

    $_SESSION['message'] = 'Task Deleted Succesfully';
    $_SESSION['message_type'] = 'danger';
} 

?>