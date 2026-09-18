<?php 
    $selesai = -1;
    $diproses = 1;
    $resep_masuk = 999;
?>
<?= view('components/pharmacy/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex flex-col p-5 gap-5 text-center">
        <h1 class="text-3xl">Apotek</h1>
        <h1 class="text-2xl">Total obat yang dikirim : <?php echo $selesai ?></h1>
    </div>
    <div class="w-250 flex flex-col gap-10">
        <div class="flex justify-evenly">
            <div class="flex flex-col w-60 h-50 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Resep Masuk</h1>
                <h1 class="text-xl text-center"><?php echo $resep_masuk ?></h1>
                <a href="/apotek/resep-masuk"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Tangani</button></a>
            </div>
            <div class="flex flex-col w-60 h-50 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Sedang Diproses</h1>
                <h1 class="text-xl text-center"><?php echo $diproses ?></h1>
                <a href="/apotek/sedang-diproses"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
    </div>
</div>