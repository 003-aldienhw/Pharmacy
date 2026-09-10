<?php 
    $nama = "Budi Santoso";
    $nik = 3171014108950003;
    $tanggal_lahir = "01-09-1945" ; 
    $jenis_kelamin = "Laki-laki";
    $alamat_lengkap = "Jalan buaya nomor 1945, RT 003/RW 002, Kelurahan Sukasaya, Kecamatan kacamata, Jakarta selatan, DKI Jakarta 12750";
    $no_hp = "0812-3456-7890";
?>
<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-full font-changa bg-[#022e42]">
    <div class="flex w-120 justify-between items-center">
        <a href="/"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Profil</h1>
        </div>
        <a href="/login"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#bf0606] cursor-pointer rounded-lg">Log Out</button></a>
    </div>
    <div class="flex flex-col w-120 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <div class="flex w-full justify-between items-center mb-5">
            <h1 class="w-full text-2xl text-left">Informasi saya</h1>
            <button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Edit</button>
        </div>
        <div class="flex flex-col w-full gap-3">
            <h1 class="text-lg text-left">Nama Lengkap</h1>
            <div class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg"><?php echo $nama ?></div>
            <h1 class="text-lg text-left">NIK</h1>
            <div class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg"><?php echo $nik ?></div>
            <h1 class="text-lg text-left">Tanggal Lahir</h1>
            <div class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg"><?php echo $tanggal_lahir ?></div>
            <h1 class="text-lg text-left">Jenis Kelamin</h1>
            <div class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg"><?php echo $jenis_kelamin ?></div>
            <h1 class="text-lg text-left">Alamat Lengkap</h1>
            <div class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg"><?php echo $alamat_lengkap ?></div>
            <h1 class="text-lg text-left">Nomor HP</h1>
            <div class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg"><?php echo $no_hp ?></div>
        </div>
        
</div>