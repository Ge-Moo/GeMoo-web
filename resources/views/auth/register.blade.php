<x-main>
    <div class="text-white text-center mt-20 font-semibold w-[30rem] mx-auto">
        <h1 class="text-xl ">Segera buat akun dan isi item kamu</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('insertMember') }}" method="post" class="flex flex-col items-center mt-5">
            @csrf
            <div class="flex flex-col items-center w-full">
                <label for="">Email</label>
                <input type="text"
                    class="border-b-[7px] border-spacing-4 border-[#40CE9B] mt-3 w-full py-2 text-black bg-[#DDE9E4] rounded-full"
                    name="email" value="{{ old('email') }}">
            </div>
            <div class="flex flex-col items-center my-5 w-full">
                <label for="">Nama</label>
                <input type="text"
                    class="border-b-[7px] border-spacing-4 border-[#40CE9B] mt-3 w-full py-2 text-black bg-[#DDE9E4] rounded-full"
                    name="nama" value="{{ old('nama') }}">
            </div>
            <div class="flex flex-col items-center my-5 w-full">
                <label for="">Nomor WhatsApp</label>
                <input type="text"
                    class="border-b-[7px] border-spacing-4 border-[#40CE9B] mt-3 w-full py-2 text-black bg-[#DDE9E4] rounded-full"
                    name="no_whatsapp" value="{{ old('no_whatsapp') }}">
            </div>
            <div class="flex flex-col items-center w-full">
                <label for="">Nama Pengguna</label>
                <input type="text"
                    class="border-b-[7px] border-spacing-4 border-[#40CE9B] mt-3 w-full py-2 text-black bg-[#DDE9E4] rounded-full"
                    name="nama_pengguna" value="{{ old('nama_pengguna') }}">
            </div>
            <div class="flex flex-col items-center my-5 w-full">
                <label for="">Kata sandi</label>
                <input type="text"
                    class="border-b-[7px] border-spacing-4 border-[#40CE9B] mt-3 w-full py-2 text-black bg-[#DDE9E4] rounded-full"
                    name="kata_sandi" value="{{ old('kata_sandi') }}">
            </div>
            <button class="bg-[#40CE9B] mt-3 py-2 px-6 rounded-[9500px]">Register</button>
        </form>
    </div>
</x-main>

