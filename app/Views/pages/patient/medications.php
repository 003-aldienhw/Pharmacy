<?= view('components/patient/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Obat dan Resep</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full">
            <div class="flex justify-between mb-5">
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center text-lg">Obat dan Resep</h1>
                <h1 class="w-full text-center text-lg">Tanggal</h1>
                <h1 class="w-full text-center text-lg">Status</h1>
            </div>
            <a href="/pembayaran?id=1&status=pending"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Dr. Asep</h1>
                <h1 class="w-full text-center">Paracetamol 100x sehari</h1>
                <h1 class="w-full text-center">17 Agustus 1945</h1>
                <h1 class="w-full text-center">Siap diambil</h1>
            </div></a>
            <a href="/pembayaran?id=2&status=in-queue"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Dr. Ucok</h1>
                <h1 class="w-full text-center">Obat Tidur 100x sehari</h1>
                <h1 class="w-full text-center">17 Agustus 1745</h1>
                <h1 class="w-full text-center">Menunggu disiapkan</h1>
            </div></a>
            <a href="/pembayaran?id=3&status=done"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Dr. Ucup</h1>
                <h1 class="w-full text-center">Racun Sianida 100x sehari</h1>
                <h1 class="w-full text-center">17 Agustus 1899</h1>
                <h1 class="w-full text-center">Sudah Diambil</h1>
            </div></a>
        </div>
    </div>
</div>