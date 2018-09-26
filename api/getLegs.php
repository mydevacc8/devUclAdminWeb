<?php
include 'connection.php';
if (isset($_GET['leg'])) {
    $legId = $_GET['leg'];

    $stmt = $conn->query('SELECT * FROM legs WHERE id='.$legId);
    while ($row = $stmt->fetch())
    {
        $data[] = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'description' => $row['description'],
            'lat' => $row['lat'],
            'long' => $row['long'],
            'address' => $row['address']
        );
    }

    if($stmt){
        $result = '{"success":true, "data":' . json_encode($data) . '}';
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