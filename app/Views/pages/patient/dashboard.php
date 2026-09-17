<?php 
    $nama = "Budi";
?>
<?= view('components/patient/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full h-screen font-changa bg-[#c9c9c9]">
    <div class="flex flex-col p-5 text-3xl text-center">
        <h1>Halo <?php echo $nama ?></h1>
        <h1>Mau melakukan apa hari ini?</h1>
    </div>
    <div class="flex flex-col w-150 gap-10">
        <div class="flex justify-between">
            <div class="flex flex-col w-60 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Daftar Poli</h1>
                <a href="/poli"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Pilih Poli</button></a>
            </div>
            <div class="flex flex-col w-60 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Antrian saya</h1>
                <a href="/poli/poli-daftar/antrian?id=1"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="flex flex-col w-60 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Pembayaran</h1>
                <a href="/pembayaran"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
            <div class="flex flex-col w-60 justify-center items-center p-7 bg-[#1c80ad] rounded-lg shadow-xl">
                <h1 class="text-xl text-center">Obat dan Resep</h1>
                <a href="/obat"><button class="mt-5 p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Lihat</button></a>
            </div>
        </div>
    </div>
</div>