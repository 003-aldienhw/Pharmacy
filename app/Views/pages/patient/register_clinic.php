<?php 
    $users = [
        1 => [
            "poli" => "Poli Umum",
            "dokter" => "Dr. Ahmad",
            "jadwal" => "Senin-Jumat"
        ],
        2 => [
            "poli" => "Poli Gigi",
            "dokter" => "Dr. Ucup",
            "jadwal" => "Senin-Kamis"
        ],
        3 => [
            "poli" => "Poli Anak",
            "dokter" => "Dr. Asep",
            "jadwal" => "Selasa-Rabu"
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $users)) {
            $user = $users[$selected_id];

            $poli = htmlspecialchars($user['poli']);
            $dokter = htmlspecialchars($user['dokter']);
            $jadwal = htmlspecialchars($user['jadwal']);
        } else {
            echo "user not found.";
        }
    } else {
        echo "user was not choosed.";
    }
?>
<?= view('components/patient/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex w-120 justify-between items-center">
        <a href="/poli"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Daftar Poli</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-120 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Poli</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $poli ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $dokter ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Jadwal</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $jadwal ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Keluhan</h1>
                <input class="w-full p-1 bg-gray-300 font-comic font-bold rounded-lg border-2 border-black outline-none">
            </div>
            <div class="flex justify-center">
                <a href="/poli/poli-daftar/antrian?id=<?= $selected_id ?>"><button class="mt-5 p-1 w-30 text-xl text-white bg-[#011359] cursor-pointer rounded-lg">Daftar</button></a>
            </div>
        </div>
    </div>
</div>