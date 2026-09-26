<?php 
    $meds = [
        1 => [
            "dokter" => "Dr. Asep",
            "pasien" => "Tono",
            "obat" => "Paracetamol",
            "jumlah" => "100"
        ],
        2 => [
            "dokter" => "Dr. Ucok",
            "pasien" => "Toni",
            "obat" => "Obat tidur",
            "jumlah" => "100"
        ],
        3 => [
            "dokter" => "Dr. Ucup",
            "pasien" => "Jason",
            "obat" => "Racun Sianida",
            "jumlah" => "100"
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $meds)) {
            $med = $meds[$selected_id];

            $dokter = htmlspecialchars($med['dokter']);
            $pasien = htmlspecialchars($med['pasien']);
            $obat = htmlspecialchars($med['obat']);
            $jumlah = htmlspecialchars($med['jumlah']);
        } else {
            echo "med not found.";
        }
    } else {
        echo "meds was not choosed.";
    }
?>
<?= view('components/pharmacy/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/apotek/resep-masuk"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Resep Masuk</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Pasien</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $pasien ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $dokter ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Obat</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $obat ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Jumlah</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $jumlah ?></h1>
            </div>
            <div class="flex justify-center">
                <a href=""><button class="mt-10 p-1 w-30 text-xl text-white bg-[#032196] cursor-pointer rounded-lg">Siapkan</button></a>
            </div>
        </div>
    </div>
</div>