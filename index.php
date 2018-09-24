<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php echo '<p>Hello World</p>'; ?> 
    </body>
</html>

<?php

try {
    $conn = new PDO("sqlsrv:server = tcp:ucldb.database.windows.net,1433; Database = ucldb", "ucldata", "ucl123Data");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print("Database connection is established");
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

$stmt = $conn->query('SELECT * FROM tours');
while ($row = $stmt->fetch())
{
    echo $row['name'] . "\n";
}

?>