<x-main>
    <p class="text-white text-center mt-10">Silahkan masuk ke akun anda</p>
    <div class="text-white flex justify-between pl-20 pr-60 mt-20 w-full">
        <div class="w-[60%] ">
            <form action="" method="post" class="flex flex-col items-center w-full border-4 p-5 border-[#40CE9B] ">
                @csrf
                <div class="flex flex-col items-center">
                    <label for="">Nama Pengguna</label>
                    <input type="text" class="border-t border-2 border-spacing-4 border-[#40CE9B] text-black bg-[#DDE9E4] rounded-full">
                </div>
                <button>Login</button>
            </form>
        </div>
        <div class="text-lg text-center bg-red-300">
            <p>Kesulitan ketika masuk ?</p>
            <a href="" class="bg-[#40CE9B] mt-5 py-2 px-6 rounded-[9500px]">Buat akun</a>
            <p>atau</p>
            <a href="" class="bg-[#40CE9B] py-2 px-6 rounded-[9500px]">Lupa Kata Sandi</a>
        </div>
    </div>
</x-main>