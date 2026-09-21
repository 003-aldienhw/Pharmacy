<?php 
    $payments = [
        1 => [
            "dokter" => "Dr. Asep",
            "pemeriksaan" => "1jt",
            "obat" => "5jt",
            "total" => "300jt",
        ],
        2 => [
            "dokter" => "Dr. Ucok",
            "pemeriksaan" => "9jt",
            "obat" => "50jt",
            "total" => "100jt",
        ],
        3 => [
            "dokter" => "Dr. Ucup",
            "pemeriksaan" => "90jt",
            "obat" => "89jt",
            "total" => "900jt",
        ],
    ];

    if (isset($_GET['id'])) {
        $selected_id = (int)$_GET['id'];

        if (array_key_exists($selected_id, $payments)) {
            $payment = $payments[$selected_id];

            $dokter = htmlspecialchars($payment['dokter']);
            $pemeriksaan = htmlspecialchars($payment['pemeriksaan']);
            $obat = htmlspecialchars($payment['obat']);
            $total = htmlspecialchars($payment['total']);
        } else {
            echo "user not found.";
        }
    } else {
        echo "user was not choosed.";
    }

    $status = $_GET['status'] ?? null;

    $written_status = null;

    $button = "mt-5 p-1 w-30 text-xl rounded-lg ";

    if ($status === 'done') {
        $button .= "text-black bg-gray-500 cursor-not-allowed"; 
        $disabled = "disabled";
        $written_status = "Sudah diambil";
    } elseif ($status === 'in-queue') {
        $button .= "text-black bg-gray-500 cursor-not-allowed"; 
        $disabled = "disabled";
        $written_status = "Menunggu disiapkan";
    } elseif ($status === 'pending') {
        $button .= "text-white bg-[#032196] cursor-pointer";
        $disabled = "";
        $written_status = "Siap diambil";
    }
?>
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
                <h1 class="w-full text-center font-comic font-bold"><?php echo $dokter ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Pemeriksaan</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $pemeriksaan ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Obat</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $obat ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Total</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $total ?></h1>
            </div>
            <div class="flex justify-between items-center">
                <h1 class="w-full text-center text-lg">Status</h1>
                <h1 class="w-full text-center font-comic font-bold"><?php echo $written_status ?></h1>
            </div>
            <div class="flex justify-center">
                <a href="/obat"><button class="<?php echo $button ?>" <?= $disabled ?>>Bayar</button></a>
            </div>
        </div>
    </div>
</div>