<?php

require_once __DIR__."/../../connectdb.php";

$sql = "CREATE TABLE IF NOT EXISTS patient (
    id_pasien INT AUTO_INCREMENT PRIMARY KEY,
    no_rekam_medis VARCHAR(20) UNIQUE NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    nik VARCHAR(16) UNIQUE,
    tanggal_lahir DATE NOT NULL,
    jenis_kelamin ENUM('L', 'P') NOT NULL,
    alamat TEXT,
    no_hp VARCHAR(20),
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$stmt = $conn->query($sql);
