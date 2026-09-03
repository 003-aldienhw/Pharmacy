<?php
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "hospital_database";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection success!\n";
    } catch(PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
