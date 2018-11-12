<?php

    include 'connection.php';
    $eventId = $_GET['id'];
    $name = $_POST['name'];
    $des = $_POST['description'];

    if(!$result = $conn->query("UPDATE events SET name='".$name."', description='".$des."' WHERE id = '".$eventId."'")){
        die('There was an error running the query ['. $conn->error.']');
    }

?>