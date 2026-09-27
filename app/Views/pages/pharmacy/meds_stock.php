<?php 
    $paracetamol = 100;
    $amoxicillin = -1;
    $obat_tidur = -9;
    $racun_sianida = 1000;
?>
<?= view('components/pharmacy/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/apotek/dashboard"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Stok Obat</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Paracetamol</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $paracetamol ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">amoxicilin</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $amoxicillin ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Obat Tidur</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $obat_tidur ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Racun Sianida</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $racun_sianida ?></h1>
            </div>
            <div class="flex justify-center">
                <a href=""><button class="mt-10 p-1 w-30 text-xl text-white bg-[#032196] cursor-pointer rounded-lg">Isi stock</button></a>
            </div>
        </div>
    </div>
</div>