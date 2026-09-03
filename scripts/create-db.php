<?php

require_once __DIR__ . '/../Database/connectdb.php';

$sql = "CREATE DATABASE IF NOT EXISTS hospital_database";

$conn->exec($sql);

echo "Database created successfull.\n";