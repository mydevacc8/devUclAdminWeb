<?php
include '../debugLog.php';
try {
    $conn = new PDO("sqlsrv:server = tcp:ucldb.database.windows.net,1433; Database = ucldb", "ucldata", "ucl123Data");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data = "Database connection is established.";
    debug_to_console();
    print("Database connection is established.\n");
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.\n");
    die(print_r($e));
}

?>