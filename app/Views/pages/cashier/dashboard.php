<?php 
    $selesai = -100;
    $transaksi = 9999;
    $riwayat = -999;
?>
<?= view('components/cashier/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex flex-col p-5 gap-5 text-center">
        <h1 class="text-3xl">Total penerimaan : <?php echo $selesai ?></h1>
    </div>
    <div class="w-250 flex flex-col gap-10">
        <div class="flex justify-evenly">
            <div class="flex flex-col w-60 h-50 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Transaksi Masuk</h1>
                <h1 class="text-xl text-center"><?php echo $transaksi ?></h1>
                <a href="/kasir/transaksi"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Tangani</button></a>
            </div>
            <div class="flex flex-col w-60 h-50 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Riwayat Transaksi</h1>
                <h1 class="text-xl text-center"><?php echo $riwayat ?></h1>
                <a href="/kasir/riwayat-transaksi"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
    </div>
</div>