<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Anggota | SIPERPUS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-cover bg-center font-[Poppins]"
      style="background-image: url('/storage/images/welcome%20siperpus.jpg');">
    <div class="fixed inset-0 w-full h-full bg-pink-200/40 backdrop-blur-smz-0"></div>

    <div class="relative z-10 flex items-center justify-center min-h-screen px-6">
        <div class="w-full max-w-2xl bg-white/80 backdrop-blur-xl shadow-2xl rounded-2xl border border-pink-300 p-8 animate-fadeIn">
  
            <h2 class="text-3xl font-bold text-center text-pink-600 mb-6">📋 Form Pendaftaran Anggota</h2>

            <form method="POST" action="{{ route('anggota.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="nis" class="block text-gray-700 font-semibold mb-2">NIS</label>
                    <input id="nis" type="text" name="nis" required
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                    <input id="nama" type="text" name="nama" required
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <div class="mb-4">
                    <label for="kelas" class="block text-gray-700 font-semibold mb-2">Kelas</label>
                    <input id="kelas" type="text" name="kelas" required
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Jenis Kelamin</label>
                    <div class="flex gap-6">
                        <label class="flex items-center">
                            <input type="radio" name="jenis_kelamin" value="L" class="text-pink-500 focus:ring-pink-400">
                            <span class="ml-2 text-gray-700">Laki-laki</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="jenis_kelamin" value="P" class="text-pink-500 focus:ring-pink-400">
                            <span class="ml-2 text-gray-700">Perempuan</span>
                        </label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="nomor_telepon" class="block text-gray-700 font-semibold mb-2">Nomor Telepon</label>
                    <input id="nomor_telepon" type="text" name="nomor_telepon" required
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none"
                           value="{{ old('nomor_telepon') }}">
                </div>

                <div class="mb-4">
                    <label for="tanggal_bergabung" class="block text-gray-700 font-semibold mb-2">Tanggal Bergabung</label>
                    <input id="tanggal_bergabung" type="date" name="tanggal_bergabung"
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>

                <div class="flex justify-center gap-4 mt-6">
                    <button type="submit"
                            class="px-6 py-3 rounded-lg bg-pink-500 text-white font-semibold shadow-lg hover:bg-pink-600 hover:scale-105 transition duration-300">
                        Simpan
                    </button>
                    <a href="{{ route('anggota.index') }}"
                       class="px-6 py-3 rounded-lg bg-gray-300 text-gray-700 font-semibold shadow hover:bg-gray-400 transition duration-300">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-out forwards;
        }
    </style>
<<<<<<< HEAD

</body>
</html>
 
>>>>>>> d0a0635820eea9782a1b79ad417d3f8af01257a2
