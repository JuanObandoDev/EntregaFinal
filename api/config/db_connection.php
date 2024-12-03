<?php
    $servername = "localhost";
    $port = "5432";
    $username = "postgres";
    $password = "0930";
    $dbname = "entrega_final";

    $data = "
        host=$servername
        port=$port 
        dbname=$dbname 
        user=$username
        password=$password
        ";

    $conn = pg_connect($data);

    if (!$conn) {
        die("Connection failed: " . pg_last_error());
    } else {
        // echo "Connected successfully";
    }
?>