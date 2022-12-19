<?php

include('db.php');

if(isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title . ' ' . $description;
    //Consulta para la base de datos
    $query = "INSERT INTO task (title, description) values ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query Failed");
    } else {
        echo 'Saved in database';
    }

    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");

}

?>