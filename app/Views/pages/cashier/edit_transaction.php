<?php 
    $transaction = [
        1 => [
            "obat" => "Paracetamol 100x",
            "total" => "3jt"
        ],
        2 => [
            "obat" => "Paracetamol 100x",
            "total" => "5jt"
        ],
        3 => [
            "obat" => "Paracetamol 100x",
            "total" => "1m"
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $transaction)) {
            $transaction = $transaction[$selected_id];

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
            <h1 class="text-xl">Obat</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $obat ?>">
            <h1 class="text-xl">Total</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $total ?>">
            <div class="flex justify-evenly">
                <a href="/kasir/detail-transaksi?id=<?php echo $selected_id ?>"><button class="mt-5 p-1 w-30 text-xl text-white bg-[#bf0606] cursor-pointer rounded-lg">Batal</button></a>
                <a href="/kasir/detail-transaksi?id=<?php echo $selected_id ?>"><button class="mt-5 p-1 w-30 text-xl text-white bg-[#032196] cursor-pointer rounded-lg">Simpan</button></a>
            </div>
        </div>
    </div>
</div>