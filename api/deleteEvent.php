<?php
    include 'connection.php';
    if(isset($_POST['id'])){
        $eventId = $_POST['id'];

        if(!$result = $conn->query("DELETE FROM events WHERE id=".$eventId)){
            die('There was an error running the query ['. $conn->error.']');
        }

        if(!$result = $conn->query("DELETE FROM eventRelations WHERE eventId=".$eventId)){
            die('There was an error running the query ['. $conn->error.']');
        }

        echo "done";
    }

?>