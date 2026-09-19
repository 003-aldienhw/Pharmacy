<?php 
    $nama = "Dimas Kopling";
    $nik = 3171014108950003;
    $tanggal_lahir = "01-09-1945" ; 
    $jenis_kelamin = "Perempuan";
    $alamat_lengkap = "Jalan buaya nomor 1945, RT 003/RW 002, Kelurahan Sukasaya, Kecamatan kacamata, Jakarta selatan, DKI Jakarta 12750";
    $no_hp = "0812-3456-7890";
    $spesialis = "Penyakit cukup dalam";
    $poli = "Polisi";
    $sip = "No. 446/0808/SIP-Dr/DPMPTSP/2026";
?>
<?= view('components/doctor/navbar') ?>
<div class="flex flex-col gap-10 p-10 pt-30 justify-center items-center w-full min-h-screen font-changa bg-[#c9c9c9]">
    <div class="flex w-220 justify-between items-center">
        <a href="/dokter/profil"><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#1c80ad] cursor-pointer rounded-lg">Batal</button></a>
        <div class="flex flex-col items-center p-5 bg-[#1c80ad] rounded-lg shadow-xl">
            <h1 class="text-3xl text-center">Edit Profil</h1>
        </div>
        <div class="w-25"></div>
    </div>
    <div class="flex flex-col w-220 items-center p-10 bg-[#1c80ad] rounded-lg shadow-xl">
        <div class="flex w-full justify-between items-center mb-5">
            <h1 class="w-full text-2xl text-left">Informasi saya</h1>
            <a href=""><button class="p-1 w-25 font-comic font-bold text-md text-white bg-[#032196] cursor-pointer rounded-lg">Simpan</button></a>
        </div>
        <div class="flex flex-col w-full gap-3">
            <h1 class="text-lg text-left">Nama Lengkap</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $nama ?>">
            <h1 class="text-lg text-left">NIK</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $nik ?>">
            <h1 class="text-lg text-left">Tanggal Lahir</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $tanggal_lahir ?>">
            <h1 class="text-lg text-left">Jenis Kelamin</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $jenis_kelamin ?>">
            <h1 class="text-lg text-left">Alamat Lengkap</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $alamat_lengkap ?>">
            <h1 class="text-lg text-left">SIP</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $sip ?>">
            <h1 class="text-lg text-left">Spesialis</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $spesialis ?>">
            <h1 class="text-lg text-left">Poli</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $poli ?>">
            <h1 class="text-lg text-left">Nomor HP</h1>
            <input class="w-full p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" value="<?php echo $no_hp ?>">
        </div>
        
</div>