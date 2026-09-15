<?php 
    $users = [
        1 => [
            "nama" => "Asep",
            "rm" => "RM-001945",
            "gender_umur" => "Laki-laki | 90 tahun",
        ],
        2 => [
            "nama" => "Udin",
            "rm" => "RM-001925",
            "gender_umur" => "Laki-laki | 10 tahun",
        ],
        3 => [
            "nama" => "Toni",
            "rm" => "RM-001915",
            "gender_umur" => "Perempuan | 910 tahun",
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $users)) {
            $user = $users[$selected_id];

            $nama = htmlspecialchars($user['nama']);
            $rm = htmlspecialchars($user['rm']);
            $gender_umur = htmlspecialchars($user['gender_umur']);
        } else {
            echo "user not found.";
        }
    } else {
        echo "user was not choosed.";
    }

    $status = $_GET['status'] ?? null;

    $button = "mt-5 p-1 w-30 text-xl rounded-lg ";

    if ($status === 'done' or $status === 'in-queue') {
        $button .= "text-black bg-gray-500 cursor-not-allowed"; 
        $disabled = "disabled";
    } else {
        $button .= "text-white bg-[#011359] cursor-pointer";
        $disabled = "";
    }
?>
<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex w-120 justify-between items-center">
        <a href="/dokter/antrian/pemeriksaan-pasien?id=<?= $selected_id ?>&status=<?=  $status ?>"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Obat & Resep</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-120 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <h1 class="text-2xl">Obat</h1>
            <input class="w-full p-1 bg-gray-300 font-comic font-bold rounded-lg border-2 border-black outline-none">
            <h1 class="text-2xl">Dosis</h1>
            <input class="w-full p-1 bg-gray-300 font-comic font-bold rounded-lg border-2 border-black outline-none">
            <h1 class="text-2xl">Jumlah</h1>
            <input class="w-full p-1 bg-gray-300 font-comic font-bold rounded-lg border-2 border-black outline-none">
            <div class="flex justify-center">
                <a href="/dokter/antrian"><button class="mt-10 p-1 w-30 text-xl text-white bg-[#011359] cursor-pointer rounded-lg">Kirim</button></a>
            </div>
        </div>
    </div>
</div>