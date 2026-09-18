<?= view('components/doctor/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/dokter/dashboard"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Antrian Pasien</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full">
            <div class="flex justify-between mb-5">
                <h1 class="w-full text-center text-lg">No</h1>
                <h1 class="w-full text-center text-lg">Pasien</h1>
                <h1 class="w-full text-center text-lg">Jam</h1>
                <h1 class="w-full text-center text-lg">Status</h1>
            </div>
            <a href="/dokter/antrian/detail-pasien?id=1&status=in-queue"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">01</h1>
                <h1 class="w-full text-center">Asep</h1>
                <h1 class="w-full text-center">08.00</h1>
                <h1 class="w-full text-center">Sedang Diperiksa</h1>
            </div></a>
            <a href="/dokter/antrian/detail-pasien?id=2&status=pending"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">02</h1>
                <h1 class="w-full text-center">Udin</h1>
                <h1 class="w-full text-center">08.00</h1>
                <h1 class="w-full text-center">Menunggu</h1>
            </div></a>
            <a href="/dokter/antrian/detail-pasien?id=3&status=done"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">03</h1>
                <h1 class="w-full text-center">Toni</h1>
                <h1 class="w-full text-center">08.00</h1>
                <h1 class="w-full text-center">Selesai</h1>
            </div></a>
        </div>
    </div>
</div>