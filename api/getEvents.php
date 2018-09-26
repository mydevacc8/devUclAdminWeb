<?php
include 'connection.php';
if (isset($_GET['event'])) {
    $eventId = $_GET['event'];

    $stmt = $conn->query('SELECT * FROM events WHERE id='.$eventId);
    while ($row = $stmt->fetch())
    {
        $data[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description']
        );
    }

    if($stmt){

        if ($data[0]['id'] == null){
            $result = '{"success":false}';
        }else{
            $result = '{"success":true, "data":' . json_encode($data) . '}';
        }
        
        
    }
    else{
        $result = '{"success":false}';
    }
}
else{
    $result = '{"success":false}';
}


echo $result;
?>