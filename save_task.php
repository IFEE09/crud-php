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

    //header("location: index.php"); descomentar esta linea para redireccionar al index.php

}

?>