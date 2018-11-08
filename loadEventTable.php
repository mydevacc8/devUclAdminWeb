<?php
    include 'api/getEventsForLeg.php';
    if(isset($_GET['id'])){
        $legId = $_GET['id'];
        $result = run($_GET['id'], $conn);
        $decode = json_decode($result,true);
        echo <<< _END

        <table class="table table-bordered"id="toursTable">
                <tr class='header'>
                    <th>Event Name</th>
                    <th>Event Description</th>
                    <th>Operations</th>
                </tr>

_END;
        for($i = 0; $i<count($decode['data']);$i++){
            echo "<tr>";
            echo "<td>".$decode['data'][$i]['name']."</td>";
            echo "<td>".$decode['data'][$i]['description']."</td>";
            echo "<td> 
                <button class='btn btn-warning' onclick=\"window.location.href='viewLeg.php?id=".$decode['data'][$i]['id']."'\" type='button'>Edit</button>
                <button type='button' class='delBtn btn btn-danger' value='".$decode['data'][$i]['id']."'>delete</button></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<button class='btn btn-primary' onclick=\"window.location.href='addEvent.php?legId=".$legId."'\" type='button'>add event</button>";

    }

?>