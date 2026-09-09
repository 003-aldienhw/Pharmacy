<?php 
    $nama = "Budi";
?>
<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Profil Saya</h1>
    <div class="flex flex-col w-150 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="w-full text-2xl text-left">Informasi saya</h1>
        <div class="flex w-full mt-10 justify-between font-comic font-bold">
            <h1 class="text-lg">Nama</h1>
            <h1 class="text-lg">:</h1>
            <h1 class="text-lg"><?php echo $nama ?></h1>
        </div>
</div>