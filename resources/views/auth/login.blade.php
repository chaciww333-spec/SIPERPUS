<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIPERPUS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-cover bg-center font-[Poppins]"
      style="background-image: url('/storage/images/welcome%20siperpus.jpg');">
    <div class="absolute inset-0 bg-pink-200/40 backdrop-blur-sm"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen px-6">
        <div class="w-full max-w-md bg-white/80 backdrop-blur-xl shadow-2xl rounded-2xl border border-pink-300 p-8 animate-fadeIn">
            <h2 class="text-3xl font-bold text-center text-pink-600 mb-2">WELCOME TO SIPERPUS! 📚</h2>
            <p class="text-center text-gray-600 mb-6">Silakan login untuk melanjutkan</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input id="email" type="email" name="email" required autofocus
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg
                                  focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input id="password" type="password" name="password" required
                           class="w-full px-4 py-2 border border-pink-300 rounded-lg
                                  focus:ring-2 focus:ring-pink-400 focus:outline-none">
                </div>
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="remember" name="remember" 
                           class="h-4 w-4 text-pink-500 border-pink-300 rounded">
                    <label for="remember" class="ml-2 text-gray-700">Selalu Ingat Saya</label>
                </div>
                <button type="submit"
                        class="w-full px-6 py-3 rounded-lg bg-pink-500 text-white font-semibold shadow-lg
                               hover:bg-pink-600 hover:scale-105 transition duration-300">
                    Login
                </button>
            </form>
            <div class="mt-6 text-center">
                <a href="#" class="text-sm text-pink-600 hover:underline">Lupa password?</a>
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
