<?php 
    $nama = "Budi";
?>
<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Selamat datang <?php echo $nama ?>!</h1>
    <div class="flex flex-col w-80 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-xl">Daftar Poli</h1>
        <a href="/clinic"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Pilih Poli</button></a>
    </div>
    <div class="flex flex-col w-80 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-xl">Pendaftaran saya</h1>
        <a href="/pendaftaran-saya"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Lihat</button></a>
    </div>
    <div class="flex flex-col w-80 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-xl">Profil saya</h1>
        <a href="/profil"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#011359] cursor-pointer rounded-lg">Profil</button></a>
    </div>
</div>