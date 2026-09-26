<?= view('components/pharmacy/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/apotek/dashboard"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Diproses</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between">
                <h1 class="w-full text-center text-lg">Pasien</h1>
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center text-lg">Obat</h1>
                <h1 class="w-full text-center text-lg">Jumlah</h1>
                <h1 class="w-full text-center text-lg">Tanggal</h1>
            </div>
            <div class="flex justify-between font-comic font-bold">
                <h1 class="w-full text-center">Johnson</h1>
                <h1 class="w-full text-center">Dr. Ahmad</h1>
                <h1 class="w-full text-center">Paracetamol</h1>
                <h1 class="w-full text-center">100</h1>
                <h1 class="w-full text-center">02 September 2026</h1>
            </div>
            <div class="flex justify-between font-comic font-bold">
                <h1 class="w-full text-center">Ahmad</h1>
                <h1 class="w-full text-center">Dr. Ucup</h1>
                <h1 class="w-full text-center">Racun Sianida</h1>
                <h1 class="w-full text-center">1000</h1>
                <h1 class="w-full text-center">04 September 2026</h1>
            </div>
            <div class="flex justify-between font-comic font-bold">
                <h1 class="w-full text-center">Ucup</h1>
                <h1 class="w-full text-center">Dr. Asep</h1>
                <h1 class="w-full text-center">Amoxicillin</h1>
                <h1 class="w-full text-center">1</h1>
                <h1 class="w-full text-center">17 Agustus 1945</h1>
            </div>
        </div>
    </div>
</div>