<?php 
    $selesai = -1;
    $diproses = 1;
    $resep_masuk = 999;
?>
<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#c9c9c9]">
    <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
        <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Apotek</h1>
    </div>
    <div class="flex flex-col w-220 items-center w-80 p-5 bg-[#1c80ad] rounded-lg shadow-xl">
        <h1 class="text-2xl text-center">Total obat yang dikirim : <?php echo $selesai ?></h1>
    </div>
    <div class="flex flex-col w-220 gap-5">
        <div class="flex justify-between">
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Resep Masuk</h1>
                <h1 class="text-xl text-center"><?php echo $resep_masuk ?></h1>
                <a href="/apotek/resep-masuk"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Tangani</button></a>
            </div>
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Sedang Diproses</h1>
                <h1 class="text-xl text-center"><?php echo $diproses ?></h1>
                <a href="/apotek/sedang-diproses"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
    </div>
</div>