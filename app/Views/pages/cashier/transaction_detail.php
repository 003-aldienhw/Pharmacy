<?php 
    $transaction = [
        1 => [
            "pasien" => "Ucup",
            "dokter" => "Dr. Ahmad",
            "obat" => "Paracetamol 100x",
            "total" => "3jt"
        ],
        2 => [
            "pasien" => "Udin",
            "dokter" => "Dr. Ucup",
            "obat" => "Paracetamol 100x",
            "total" => "5jt"
        ],
        3 => [
            "pasien" => "Budi",
            "dokter" => "Dr. Asep",
            "obat" => "Paracetamol 100x",
            "total" => "1m"
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $transaction)) {
            $transaction = $transaction[$selected_id];

            $pasien = htmlspecialchars($transaction['pasien']);
            $dokter = htmlspecialchars($transaction['dokter']);
            $obat = htmlspecialchars($transaction['obat']);
            $total = htmlspecialchars($transaction['total']);
        } else {
            echo "transaction not found.";
        }
    } else {
        echo "transaction was not choosed.";
    }
?>
<?= view('components/cashier/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/kasir/dashboard"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Detail Transaksi</h1>
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
                <h1 class="w-full text-center text-lg">Total</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $total ?></h1>
            </div>
            <div class="flex justify-evenly">
                <a href="/kasir/edit-transaksi?id=<?php echo $selected_id ?>"><button class="mt-5 p-1 w-30 text-xl text-white bg-[#bf0606] cursor-pointer rounded-lg">Edit</button></a>
                <a href="/kasir/transaksi"><button class="mt-5 p-1 w-30 text-xl text-white bg-[#032196] cursor-pointer rounded-lg">Selesaikan</button></a>
            </div>
        </div>
    </div>
</div>