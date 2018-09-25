<?php
include 'connection.php';
$stmt = $conn->query('SELECT * FROM tours');
while ($row = $stmt->fetch())
{
    $data[] = array(
        'name' => $row['name']
    );
}

if($stmt){
    $result = "{'success':true, 'data':" . json_encode($data) . "}";
}
else{
    $result = "{'success':false}";
}

echo $result;
?>