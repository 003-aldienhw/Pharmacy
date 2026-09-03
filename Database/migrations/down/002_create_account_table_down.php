<?php

require_once __DIR__ . '/../../connectdb.php';

// Migration DOWN: 002_create_account

$sql = "DROP TABLE IF EXISTS account";

$stmt = $conn->query($sql);
