<?php
include 'connection.php';
if (isset($_GET['beacon'])) {
    $beaconId = $_GET['beacon'];

    $stmt = $conn->query('SELECT legId FROM legRelations WHERE beaconId='.$beaconId);
    while ($row = $stmt->fetch())
    {
        $data[] = array(
            'legId' => $row['legId']
        );
    }

    if($stmt){

        if ($data[0]['legId'] == null){
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