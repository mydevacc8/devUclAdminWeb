<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?> 
    </body>
</html>

<?php
include 'connection.php';

$stmt = $conn->query('SELECT * FROM tours');
while ($row = $stmt->fetch())
{
    echo $row['name'] . "\n";
}

?>