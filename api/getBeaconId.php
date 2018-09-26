<?php
include 'connection.php';
if (isset($_GET['leg'])) {
    $legId = $_GET['leg'];

    $stmt = $conn->query('SELECT beaconId FROM legRelations WHERE legId='.$legId);
    while ($row = $stmt->fetch())
    {
        $data[] = array(
            'id' => $row['beaconId']
        );
    }

    if($stmt){
        echo $data[0]['id'];
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