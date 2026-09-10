<?php 
    $nama = "Budi";
?>
<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Selamat datang, <?php echo $nama ?>!</h1>
    </div>
    <div class="flex flex-col w-120 items-center w-80 p-5 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-2xl text-center">Pilih Tujuanmu</h1>
    </div>
    <div class="flex flex-col w-120 gap-5">
        <div class="flex justify-between">
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#156082] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Daftar Poli</h1>
                <a href="/poli"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Pilih Poli</button></a>
            </div>
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#156082] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Obat dan Resep</h1>
                <a href="/obat"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#156082] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Pembayaran</h1>
                <a href="/pembayaran"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
            <div class="flex flex-col w-55 justify-center items-center p-7 bg-[#156082] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Profil saya</h1>
                <a href="/profil"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Profil</button></a>
            </div>
        </div>
    </div>
</div>