<?php
    $database = "pension";
    $username = "root";
    $password = "";
    $host = "localhost";

    try {
        $connect = mysqli_connect($host, $username, $password, $database);
    } catch (\Throwable $th) {
        echo "Could not establish database connection";
    }
        
    mysqli_select_db($connect, $database);
?> 