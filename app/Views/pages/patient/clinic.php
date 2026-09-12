<div class="flex flex-col gap-10 p-10 justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex w-120 justify-between items-center">
        <a href="/"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#156082] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center text-shadow-sm text-shadow-white">Pilih Poli</h1>
        </div>
        <a href="/pendaftaran-saya"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#156082] cursor-pointer rounded-lg">Riwayat</button></a>
    </div>
    <div class="flex flex-col w-120 items-center p-10 bg-[#156082] rounded-lg shadow-xl">
        <form action="poli-daftar" method="get" class="flex flex-col w-full gap-5">
            <div class="flex justify-between">
                <h1 class="w-full text-center text-lg">Poli</h1>
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center text-lg">Jadwal</h1>
            </div>
            <a href="/poli-daftar?id=1"><div class="flex justify-between font-comic font-bold hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Poli Umum</h1>
                <h1 class="w-full text-center">Dr. Ahmad</h1>
                <h1 class="w-full text-center">Senin-Jumat</h1>
            </div></a>
            <a href="/poli-daftar?id=2"><div class="flex justify-between font-comic font-bold hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Poli Gigi</h1>
                <h1 class="w-full text-center">Dr. Ucup</h1>
                <h1 class="w-full text-center">Senin-Kamis</h1>
            </div></a>
            <a href="/poli-daftar?id=3"><div class="flex justify-between font-comic font-bold hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Poli Anak</h1>
                <h1 class="w-full text-center">Dr. Asep</h1>
                <h1 class="w-full text-center">Selasa-Rabu</h1>
            </div></a>
        </form>
    </div>
</div>