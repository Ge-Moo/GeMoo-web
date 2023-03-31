<x-main>
    <p class="text-white text-center mt-10 font-semibold">Silahkan masuk ke akun anda</p>
    <div class="text-white font-semibold flex justify-between items-center pl-20 pr-60 mt-20 w-full absolute z-50">
        <div class="w-[55%] ">
            <form action="" method="post" class="flex flex-col items-center w-full border-4 rounded-xl px-5 py-8 border-[#40CE9B] ">
                @csrf
                <div class="flex flex-col items-center w-full">
                    <label for="">Nama Pengguna</label>
                    <input type="text" class="border-b-[7px] border-spacing-4 border-[#40CE9B] mt-3 w-full py-2 text-black bg-[#DDE9E4] rounded-full">
                </div>
                <div class="flex flex-col items-center my-5 w-full">
                    <label for="">Kata sandi</label>
                    <input type="text" class="border-b-[7px] border-spacing-4 border-[#40CE9B] mt-3 w-full py-2 text-black bg-[#DDE9E4] rounded-full">
                </div>
                <button class="bg-[#40CE9B] py-2 px-6 rounded-[9500px]">Login</button>
            </form>
        </div>
        <div class="text-lg text-center ">
            <p>Kesulitan ketika masuk ?</p>
            <div class="mt-10"><a href="" class="bg-[#40CE9B] py-2 px-6 rounded-[9500px]">Buat akun</a></div>
            <p class="my-7">atau</p>
            <div><a href="" class="bg-[#40CE9B] py-2 px-6 rounded-[9500px]">Lupa kata sandi</a></div>
        </div>
    </div>
    <div class="absolute z-0 right-[23rem] rotate-[-42deg] top-52"><img loading="lazy" src="{{ asset('icons/Icon Game.svg') }}" alt="image post" class="w-[29rem]"></div>
</x-main>