
<?php  
   // PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:dicodingwebappamsolserver.database.windows.net,1433; 
    Database = dicodingamsoldb", "dicoding", "rakan@ra19");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

    ?>
