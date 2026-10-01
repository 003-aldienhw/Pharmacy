<?= view('components/cashier/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/kasir/dashboard"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Kembali</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Transaksi</h1>
        </div>
        <a href="/kasir/riwayat-transaksi"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Riwayat</button></a>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex flex-col w-full">
            <div class="flex justify-between mb-5">
                <h1 class="w-full text-center text-lg">Pasien</h1>
                <h1 class="w-full text-center text-lg">Dokter</h1>
                <h1 class="w-full text-center text-lg">Obat</h1>
                <h1 class="w-full text-center text-lg">Total</h1>
            </div>
            <a href="/kasir/detail-transaksi?id=1"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Ucup</h1>
                <h1 class="w-full text-center">Dr. Ahmad</h1>
                <h1 class="w-full text-center">Paracetamol 100x</h1>
                <h1 class="w-full text-center">3jt</h1>
            </div></a>
            <a href="/kasir/detail-transaksi?id=2"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Udin</h1>
                <h1 class="w-full text-center">Dr. Ucup</h1>
                <h1 class="w-full text-center">Paracetamol 100x</h1>
                <h1 class="w-full text-center">5jt</h1>
            </div></a>
            <a href="/kasir/detail-transaksi?id=3"><div class="flex justify-between items-center font-comic font-bold h-10 hover:bg-white transition-all duration-200 rounded-sm cursor-pointer">
                <h1 class="w-full text-center">Budi</h1>
                <h1 class="w-full text-center">Dr. Asep</h1>
                <h1 class="w-full text-center">Paracetamol 100x</h1>
                <h1 class="w-full text-center">1m</h1>
            </div></a>
        </div>
    </div>
</div>