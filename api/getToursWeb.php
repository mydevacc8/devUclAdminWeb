<?php
include 'connection.php';
$stmt = $conn->query('SELECT * FROM tours');
while ($row = $stmt->fetch())
{
    $data[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'image' => $row['image']
    );
}

if($stmt){
    $result = '{"success":true, "data":' . json_encode($data) . '}';
}
else{
    $result = '{"success":false}';
}
?>