<?php 
    $users = [
        1 => [
            "tanggal" => "01 07 1899",
            "poli" => "Poli Umum",
            "dokter" => "Dr. Tirta",
            "keluhan" => "Sakit kaki",
            "diagnosis" => "Kanker",
            "resep" => "Ayam goreng",
            "catatan" => "Jangan dibiarin hidup"
        ],
        2 => [
            "tanggal" => "17 08 1945",
            "poli" => "Poli Gigi",
            "dokter" => "Dr. Dede",
            "keluhan" => "Sakit dada",
            "diagnosis" => "TBC",
            "resep" => "Telur Dadar",
            "catatan" => "Jangan diajak ngobrol"
        ],
        3 => [
            "tanggal" => "05 02 1755",
            "poli" => "Poli Anak",
            "dokter" => "Dr. Dre",
            "keluhan" => "Sakit tangan",
            "diagnosis" => "Buta",
            "resep" => "Paracetamol 100x sedetik",
            "catatan" => "Diajak lari setiap detik"
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $users)) {
            $user = $users[$selected_id];

            $tanggal = htmlspecialchars($user['tanggal']);
            $poli = htmlspecialchars($user['poli']);
            $dokter = htmlspecialchars($user['dokter']);
            $keluhan = htmlspecialchars($user['keluhan']);
            $diagnosis = htmlspecialchars($user['diagnosis']);
            $resep = htmlspecialchars($user['resep']);
            $catatan = htmlspecialchars($user['catatan']);
        } else {
            echo "user not found.";
        }
    } else {
        echo "user was not choosed.";
    }
    $status = $_GET['status'] ?? null;
?>
<?= view('components/doctor/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/dokter/antrian/detail-pasien?id=<?=  $selected_id ?>&status=<?=  $status ?>"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Riwayat Pasien</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <h1 class="text-2xl">Riwayat Pemeriksaan</h1>
            <div class="flex justify-between items-center">
                <h1 class="text-lg">Tanggal</h1>
                <h1 class="font-comic font-bold"><?php echo $tanggal ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="text-lg">Poli</h1>
                <h1 class="font-comic font-bold"><?php echo $poli ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="text-lg">Dokter</h1>
                <h1 class="font-comic font-bold"><?php echo $dokter ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="text-lg">Keluhan</h1>
                <h1 class="font-comic font-bold"><?php echo $keluhan ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="text-lg">Diagnosa</h1>
                <h1 class="font-comic font-bold"><?php echo $diagnosis ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="text-lg">Resep</h1>
                <h1 class="font-comic font-bold"><?php echo $resep ?></h1>
            </div>
            <h1 class="text-2xl">Catatan Penting</h1>
            <h1 class="font-comic font-bold"><?php echo $catatan ?></h1>
        </div>
    </div>
</div>