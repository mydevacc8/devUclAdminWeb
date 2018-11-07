<?php
    include 'connection.php';
    $legId = $_GET['id'];
    $name = $_POST['name'];
    $des = $_POST['description'];


    if(!$result = $conn->query("INSERT INTO events (name, description) VALUES('".$name."','".$des."')")){
        die('There was an error running the query ['. $conn->error.']');
    }else{   
        $insertEvent = true;
    }

    $eventId = $conn->lastInsertId();

    if(!$result = $conn->query("INSERT INTO eventRelations (legId, eventId) VALUES('".$legId."','".$eventId."')")){
        die('There was an error running the query ['. $conn->error.']');
    }else{   
        $insertEventR = true;
    }


    if ($insertEvent === true && $insertEventR === true){
        echo 'All good everythig has been uploaded';
    }else{
        echo 'Something went wrong';
    }
    
?>