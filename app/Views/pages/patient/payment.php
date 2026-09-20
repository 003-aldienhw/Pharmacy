<?= view('components/patient/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/obat"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Pembayaran</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center font-comic font-bold">Dr. Ahmad</h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Pemeriksaan</h1>
                <h1 class="w-full text-center font-comic font-bold">1jt</h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Obat</h1>
                <h1 class="w-full text-center font-comic font-bold">10jt</h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Total</h1>
                <h1 class="w-full text-center font-comic font-bold">2t</h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Status</h1>
                <h1 class="w-full text-center font-comic font-bold">Belum dibayar</h1>
            </div>
            <div class="flex justify-center">
                <a href="/obat"><button class="mt-5 p-1 w-30 text-xl text-white bg-[#032196] cursor-pointer rounded-lg">Bayar</button></a>
            </div>
        </div>
    </div>
</div>