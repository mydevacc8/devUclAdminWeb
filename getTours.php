<?php
$stmt = $conn->query('SELECT * FROM tours');
while ($row = $stmt->fetch())
{
    echo $row['name'] . "\n";
}
?>