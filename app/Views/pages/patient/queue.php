<?= view('components/patient/navbar') ?>
<?php
    $users = [
        1 => [
            "poli" => "Poli Umum",
            "dokter" => "Dr. Ahmad",
            "rm" => "RM-001945",
            "tanggal" => "01 07 1899"
        ],
        2 => [
            "poli" => "Poli Gigi",
            "dokter" => "Dr. Ucup",
            "rm" => "RM-001925",
            "tanggal" => "01 07 1899"
        ],
        3 => [
            "poli" => "Poli Anak",
            "dokter" => "Dr. Asep",
            "rm" => "RM-001915",
            "tanggal" => "05 02 1755"
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $users)) {
            $user = $users[$selected_id];

            $poli = htmlspecialchars($user['poli']);
            $dokter = htmlspecialchars($user['dokter']);
            $tanggal = htmlspecialchars($user['tanggal']);
            $rm = htmlspecialchars($user['rm']);
        } else {
            echo "user not found.";
        }
    } else {
        echo "user was not choosed.";
    }
?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Antrian</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">No RM</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $rm ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Tanggal</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $tanggal ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Poli</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $poli ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $dokter ?></h1>
            </div>
            <h1 class="text-2xl text-center">Status</h1>
            <h1 class="font-comic font-bold text-center">Menunggu Pemeriksaan</h1>
        </div>
    </div>
</div>