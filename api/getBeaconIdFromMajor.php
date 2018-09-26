<?php
include 'connection.php';
if (isset($_GET['major'])) {
    $beaconMajor = $_GET['major'];

    $stmt = $conn->query('SELECT id FROM beacons WHERE beaconMajor='.$beaconMajor);
    while ($row = $stmt->fetch())
    {
        $data[] = array(
            'id' => $row['id']
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