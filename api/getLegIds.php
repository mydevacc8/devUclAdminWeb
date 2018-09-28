<?php
include 'connection.php';
function getLegs($id, $conn){
    
    $stmt = $conn->query('SELECT * FROM tourRelations WHERE tourId='.$id);
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
    echo $result;
}
if (isset($_GET['tour'])) {
    $tourId = $_GET['tour'];
    getLegs($tourId,$conn);
    
    
}

?>