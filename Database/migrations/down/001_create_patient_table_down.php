<?php

require_once __DIR__."/../../connectdb.php";

$sql = "DROP TABLE IF EXISTS    patient";


$stmt = $conn->query($sql);
