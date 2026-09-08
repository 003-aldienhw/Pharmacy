<?php 
    $errorMessage = "Hanya menerima angka!";
    $inputBaseClasses = "w-70 p-1 bg-gray-300 font-comic font-bold rounded-lg border-2 border-black outline-none transition-colors duration-200";
    $inputErrorClasses = "border-red-800 bg-red-10";
    $phoneErrorMessage = "Masukkan No HP yang valid!";
    $phoneInputBase = "w-70 p-1 bg-gray-300 font-comic font-bold rounded-lg border-2 border-black outline-none transition-colors duration-200";
    $phoneInputError = "border-red-800 bg-red-10";
?>
<div class="flex justify-center items-center w-full h-screen font-changa bg-[#022e42]">
    <div class="flex flex-col p-10 bg-[#156082] rounded-lg shadow-xl">
        <h1 class="text-3xl text-center">Daftar Pasien</h1>
        <div class="flex flex-col gap-3 mt-10">
            <h1 class="text-md">Nama lengkap</h1>
            <input class="w-70 p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" type="text"/>
            <h1 class="text-md">NIK KTP</h1>
            <div id="errorMessage" class="hidden font-comic font-bold text-sm text-red-800 mb-1">
                <?php echo htmlspecialchars($errorMessage); ?>
            </div>
            <input class="<?php echo $inputBaseClasses ?>" type="text" id="numberInput" inputmode="numeric"/>
            <h1 class="text-md">Tanggal lahir</h1>
            <input class="w-70 p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" type="date"/>
            <h1 class="text-md">Jenis kelamin</h1>
            <div class="flex justify-between">
                <div class="flex gap-2 items-center">
                    <input type="radio" name="jenis-kelamin" class="w-4 h-4"/>
                    <label for="laki-laki" class="font-comic font-bold">Laki-laki</label>
                </div>
                <div class="flex gap-2 items-center">
                    <input type="radio" name="jenis-kelamin" class="w-4 h-4"/>
                    <label for="perempuan" class="font-comic font-bold">Perempuan</label>
                </div>
            </div>
            <h1 class="text-md">Alamat Lengkap</h1>
            <input class="w-70 p-1 bg-gray-300 outline-none border-2 border-black font-comic font-bold rounded-lg" type="text"/>
            <h1 class="text-md">No HP</h1>
            <div id="phoneError" class="hidden font-comic font-bold text-sm text-red-800 mb-1">
                <?php echo htmlspecialchars($phoneErrorMessage); ?>
            </div>
            <input class="<?php echo $phoneInputBase ?>" type="tel" id="phoneInput" placeholder="0821-9273-2377" inputmode="tel"/>
        </div>
<<<<<<< HEAD:Views/register.php
        <div class="flex justify-center">
            <button class="mt-10 p-1 w-30 text-xl bg-[#14b6ff] cursor-pointer rounded-lg">Submit</button>
        </div>
=======
        <button  class="cursor-pointer">register</button>
>>>>>>> 5adbfc7a6e4f5ffa15cf63e023fc7b19060d75cb:app/Views/pages/register.php
    </div>
</div>
<script>
    const input = document.getElementById('numberInput');
    const errorMessage = document.getElementById('errorMessage');
    const phoneInput = document.getElementById('phoneInput');
    const phoneError = document.getElementById('phoneError');
    const pErrorClasses = <?php echo json_encode(explode(' ', $phoneInputError)); ?>;

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

    phoneInput.addEventListener('input', function() {
<<<<<<< HEAD:Views/register.php
        let value = this.value;
        let rawValue = value.replace(/-/g,'');
        const hasInvalidChar = /[^0-9]/.test(rawValue);
        rawValue = this.value.replace(/\D/g, '');
=======
        let rawValue = this.value.replace(/\D/g, '');
>>>>>>> 5adbfc7a6e4f5ffa15cf63e023fc7b19060d75cb:app/Views/pages/register.php
    
        if (rawValue.length > 12) {
            rawValue = rawValue.substring(0, 12);
        }
    
        let formattedValue = '';
        if (rawValue.length > 0) {
            formattedValue += rawValue.substring(0, 4);
        }
        if (rawValue.length > 4) {
            formattedValue += '-' + rawValue.substring(4, 8);
        }
        if (rawValue.length > 8) {
            formattedValue += '-' + rawValue.substring(8, 12);
        }
    
        this.value = formattedValue;

        if (rawValue.length > 0 && rawValue.length < 10) {
            phoneError.classList.remove('hidden');
            phoneError.classList.add('block');
            phoneInput.classList.remove('border-black');
            phoneInput.classList.add(...pErrorClasses);
        } else {
            phoneError.classList.remove('block');
            phoneError.classList.add('hidden');
            phoneInput.classList.remove(...pErrorClasses);
            phoneInput.classList.add('border-black');
        }
    });
</script>