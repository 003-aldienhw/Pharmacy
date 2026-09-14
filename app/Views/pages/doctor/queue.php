<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex w-120 justify-between items-center">
        <a href="/dokter/dashboard"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Antrian Pasien</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-120 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <div class="flex flex-col w-full gap-5">
            <div class="flex justify-between">
                <h1 class="w-full text-center text-lg">No</h1>
                <h1 class="w-full text-center text-lg">Pasien</h1>
                <h1 class="w-full text-center text-lg">Jam</h1>
                <h1 class="w-full text-center text-lg">Status</h1>
            </div>
            <a href="/dokter/detail-pasien?id=1&status=pending"><div class="flex justify-between font-comic font-bold hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">01</h1>
                <h1 class="w-full text-center">Asep</h1>
                <h1 class="w-full text-center">08.00</h1>
                <h1 class="w-full text-center">Menunggu</h1>
            </div></a>
            <a href="/dokter/detail-pasien?id=2&status=pending"><div class="flex justify-between font-comic font-bold hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">02</h1>
                <h1 class="w-full text-center">Udin</h1>
                <h1 class="w-full text-center">08.00</h1>
                <h1 class="w-full text-center">Menunggu</h1>
            </div></a>
            <a href="/dokter/detail-pasien?id=3&status=done"><div class="flex justify-between font-comic font-bold hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">03</h1>
                <h1 class="w-full text-center">Toni</h1>
                <h1 class="w-full text-center">08.00</h1>
                <h1 class="w-full text-center">Selesai</h1>
            </div></a>
        </div>
    </div>
</div>