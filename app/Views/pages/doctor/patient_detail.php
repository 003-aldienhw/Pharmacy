<?php 
    $users = [
        1 => [
            "nama" => "Asep",
            "rm" => "RM-001945",
            "gender_umur" => "Laki-laki | 90 tahun",
            "tanggal_lahir" => "01 07 1899",
            "keluhan" => "Sakit kaki"
        ],
        2 => [
            "nama" => "Udin",
            "rm" => "RM-001925",
            "gender_umur" => "Laki-laki | 10 tahun",
            "tanggal_lahir" => "17 08 1945",
            "keluhan" => "Sakit dada"
        ],
        3 => [
            "nama" => "Toni",
            "rm" => "RM-001915",
            "gender_umur" => "Perempuan | 910 tahun",
            "tanggal_lahir" => "05 02 1755",
            "keluhan" => "Sakit tangan"
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $users)) {
            $user = $users[$selected_id];

            $nama = htmlspecialchars($user['nama']);
            $rm = htmlspecialchars($user['rm']);
            $gender_umur = htmlspecialchars($user['gender_umur']);
            $tanggal_lahir = htmlspecialchars($user['tanggal_lahir']);
            $keluhan = htmlspecialchars($user['keluhan']);
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
        <a href="/dokter/antrian"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Detail Pasien</h1>
        </div>
        <a href="/dokter/riwayat-pasien?id=<?=  $selected_id ?>&status=<?=  $status ?>"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Riwayat</button></a>
    </div>
    <div class="flex flex-col w-120 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <h1 class="text-2xl">Biodata</h1>
            <div class="w-full flex flex-col text-left justify-center">
                <h1 class="font-comic font-bold"><?php echo $nama ?></h1>
                <h1 class="font-comic font-bold"><?php echo $rm ?></h1>
                <h1 class="font-comic font-bold"><?php echo $gender_umur ?></h1>
                <h1 class="font-comic font-bold"><?php echo $tanggal_lahir ?></h1>
            </div>
            <h1 class="text-2xl">Keluhan</h1>
            <h1 class="font-comic font-bold"><?php echo $keluhan ?></h1>
            <div class="flex justify-center">
                <button class="<?php echo $button ?>" <?= $disabled ?>>Periksa</button>
            </div>
        </div>
    </div>
</div>