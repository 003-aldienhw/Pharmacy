<?php

require_once __DIR__ . '/../../connectdb.php';

// Migration UP: 002_create_account

$sql = "CREATE TABLE IF NOT EXISTS account (
    id_account INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";

$stmt = $conn->query($sql);
