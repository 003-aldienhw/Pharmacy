<?php 
    $errorMessage = "Hanya menerima angka!";
    $inputBaseClasses = "w-70 p-1 bg-gray-300 font-comic font-bold rounded-lg border-2 border-black outline-none transition-colors duration-200";
    $inputErrorClasses = "border-red-800 bg-red-10";
?>
<div class="flex justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex flex-col p-10 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-3xl text-center">Login Pasien</h1>
        <div class="flex flex-col gap-3 mt-10">
            <h1 class="text-md">NIK / No. RM</h1>
            <div id="errorMessage" class="hidden font-comic font-bold text-sm text-red-800 mb-1">
                <?php echo htmlspecialchars($errorMessage); ?>
            </div>
            <input class="<?php echo $inputBaseClasses ?>" type="text" id="numberInput" inputmode="numeric"/>
            <h1 class="text-md">Nama</h1>
            <input class="<?php echo $inputBaseClasses ?>" type="text" />
            <h1 class="text-md">Password</h1>
            <input class="<?php echo $inputBaseClasses ?>" type="password" />
        </div>
        <div class="flex justify-center">
            <a href="/"><button class="mt-10 p-1 w-30 text-xl text-white bg-[#011359] cursor-pointer rounded-lg">Login</button></a>
        </div>
        <div class="flex flex-col mt-5 justify-center items-center">
            <h1>Belum Terdaftar?</h1>
            <a href="/register" class="text-[#011359]">Daftar</a>
        </div>
    </div>
</div>
<script>
    const input = document.getElementById('numberInput');
    const errorMessage = document.getElementById('errorMessage');
    const errorClasses = <?php echo json_encode(explode(' ', $inputErrorClasses)); ?>;

    input.addEventListener('input', function() {
        if (/[^0-9]/.test(this.value)) {
            errorMessage.classList.remove('hidden');
            errorMessage.classList.add('block');
      
            input.classList.remove('border-black');
            input.classList.add(...errorClasses);
      
            this.value = this.value.replace(/[^0-9]/g, '');
        } else {
            errorMessage.classList.remove('block');
            errorMessage.classList.add('hidden');
      
            input.classList.remove(...errorClasses);
            input.classList.add('border-black');
        }
    });
</script>