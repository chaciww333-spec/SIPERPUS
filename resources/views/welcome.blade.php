<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | SIPERPUS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-cover bg-center relative font-[Poppins]" 
      style="background-image: url('/storage/images/welcome%20siperpus.jpg');">
    <div class="absolute inset-0 bg-pink-300/40 backdrop-blur-sm"></div>
    <nav class="fixed top-0 left-0 w-full z-20 bg-white/70 backdrop-blur-md shadow-md border-b border-pink-200">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-pink-600 flex items-center gap-2">
                📚 SIPERPUS
            </h1>
        </div>
    </nav>

    <div class="relative z-10 flex items-center justify-center min-h-screen px-6">
        <div class="text-center max-w-2xl p-10 rounded-2xl 
                    bg-white/80 backdrop-blur-lg shadow-2xl border border-pink-300 animate-fadeIn">

            <h1 class="text-4xl md:text-5xl font-extrabold text-pink-600 drop-shadow-lg mb-4">
                Selamat Datang di <span class="text-pink-400">SIPERPUS</span>
            </h1>

            <p class="text-lg md:text-xl text-gray-700 mb-8 leading-relaxed">
                ✨ Sistem Informasi Perpustakaan Digital ✨<br>
                dengan desain modern, elegan, dan nyaman digunakan 📖
            </p>

            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="{{ route('login') }}" 
                   class="px-6 py-3 rounded-xl bg-pink-500 text-white font-semibold shadow-lg 
                          hover:bg-pink-600 hover:scale-105 transition duration-300">
                   Login Admin
                </a>
                <a href="{{ route('anggota.create') }}" 
                   class="px-6 py-3 rounded-xl bg-white border border-pink-400 text-pink-600 font-semibold shadow-lg 
                          hover:bg-pink-100 hover:scale-105 transition duration-300">
                   Form Anggota
                </a>
            </div>
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
</body>
</html>
