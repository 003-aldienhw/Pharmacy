<?php 
    $nama = "Tono";
    $pasien_menunggu = 100;
    $sudah_diperiksa = 1;
    $total_pasien = -100;
?>
<?= view('components/doctor/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex flex-col p-5 gap-5 text-center">
        <h1 class="text-4xl">Selamat datang, Dr. <?php echo $nama ?></h1>
        <h1 class="text-2xl">Total Pasien yang ditangani : <?php echo $total_pasien ?></h1>
    </div>
    <div class="w-250 flex flex-col gap-10 mt-10">
        <div class="flex justify-evenly">
            <div class="flex flex-col w-60 h-50 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Pasien Menunggu</h1>
                <h1 class="text-xl text-center"><?php echo $pasien_menunggu ?></h1>
                <a href="/dokter/antrian"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
            <div class="flex flex-col w-60 h-50 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Sudah Diperiksa</h1>
                <h1 class="text-xl text-center"><?php echo $sudah_diperiksa ?></h1>
                <a href="/dokter/sudah-diperiksa"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
    </div>
</div>