<?php
    $users = [
        1 => [
            "nama" => "Budi Santoso",
            "rm" => "RM-001",
            "gender_umur" => "Laki-laki, 20 tahun",
            "tanggal_lahir" => "01 09 1945",
            "keluhan" => "Sakit perut"
        ],
        2 => [
            "nama" => "Toni Ramadhan",
            "rm" => "RM-002",
            "gender_umur" => "Laki-laki, 30 tahun",
            "tanggal_lahir" => "15 03 1963",
            "keluhan" => "Sakit kepala"
        ]
    ];
?>

<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex w-120 justify-between items-center">
        <a href="/dokter/dashboard"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl gap-5">
            <h2 class="text-3xl text-center text-shadow-sm text-shadow-white">Pasien Selesai</h2>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#156082] rounded-lg shadow-xl gap-5">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between">
                <h1 class="w-full text-center text-lg">Tanggal</h1>
                <h1 class="w-full text-center text-lg">Pasien</h1>
                <h1 class="w-full text-center text-lg">Keluhan</h1>
                <h1 class="w-full text-center text-lg">Diagnosis</h1>
                <h1 class="w-full text-center text-lg">Tindakan</h1>
                <h1 class="w-full text-center text-lg">Status</h1>
            </div>
            <div class="flex justify-between font-comic font-bold">
                <h1 class="w-full text-center">17 Agustus 1945</h1>
                <h1 class="w-full text-center">Budi</h1>
                <h1 class="w-full text-center">Asep</h1>
                <h1 class="w-full text-center">Patah kaki</h1>
                <h1 class="w-full text-center">Operasi</h1>
                <h1 class="w-full text-center">Selesai</h1>
            </div>
        </div>
    </div>
</div>