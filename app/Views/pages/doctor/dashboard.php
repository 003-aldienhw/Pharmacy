<?php 
    $nama = "Tono";
    $pasien_menunggu = 100;
    $sudah_diperiksa = 1;
?>
<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Selamat datang, Dr. <?php echo $nama ?>!</h1>
    </div>
    <div class="flex flex-col w-120 items-center w-80 p-5 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-2xl text-center">Pilih Tujuanmu</h1>
    </div>
    <div class="flex flex-col w-120 gap-5">
        <div class="flex justify-between">
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#156082] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Pasien Menunggu</h1>
                <h1 class="text-xl text-center"><?php echo $pasien_menunggu ?></h1>
                <a href="/dokter/antrian"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#156082] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Sudah Diperiksa</h1>
                <h1 class="text-xl text-center"><?php echo $sudah_diperiksa ?></h1>
                <a href="/dokter/sudah-diperiksa"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
    </div>
</div>