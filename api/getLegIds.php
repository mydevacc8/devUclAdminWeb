<?php
include 'connection.php';
if (isset($_GET['tour'])) {
    $tourId = $_GET['tour'];

    $stmt = $conn->query('SELECT * FROM tourRelations WHERE tourId='.$tourId);
    while ($row = $stmt->fetch())
    {
        $data[] = array(
            'id' => $row['legId']
        );
    }

    if($stmt){
        $result = '{"success":true, "data":' . json_encode($data) . '}';
    }
    else{
        $result = '{"success":false}';
    }
}else{
    $result = '{"success":false}';
}



echo $result;
?>