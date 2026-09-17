<?= view('components/patient/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Obat dan Resep</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between">
                <h1 class="w-full text-center text-lg">Obat dan Resep</h1>
                <h1 class="w-full text-center text-lg">Status</h1>
            </div>
            <div class="flex justify-between font-comic font-bold">
                <h1 class="w-full text-center">Paracetamol 100x sehari</h1>
                <h1 class="w-full text-center">Siap diambil</h1>
            </div>
            <div class="flex justify-between font-comic font-bold">
                <h1 class="w-full text-center">Paracetamol 100x sehari</h1>
                <h1 class="w-full text-center">Menunggu disiapkan</h1>
            </div>
            <div class="flex justify-between font-comic font-bold">
                <h1 class="w-full text-center">Paracetamol 100x sehari</h1>
                <h1 class="w-full text-center">Sudah Diambil</h1>
            </div>
        </div>
    </div>
</div>