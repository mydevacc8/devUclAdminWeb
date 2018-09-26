<?php
include 'connection.php';
if (isset($_GET['beacon'])) {
    $beaconId = $_GET['beacon'];

    $stmt = $conn->query('SELECT beaconMajor FROM beacons WHERE id='.$beaconId);
    while ($row = $stmt->fetch())
    {
        $data[] = array(
            'major' => $row['beaconMajor']
        );
    }

    if($stmt){

        if ($data[0]['major'] == null){
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