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
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


?>