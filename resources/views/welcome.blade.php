<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            background: url("{{ asset('/storage/images/welcome%20siperpus.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #000;
            text-align: center;
        }
.btn-login {
            display: inline-block;
            padding: 12px 24px;
            background: #e83e8c;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            margin-top: 20px;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #c82368;
        }
.overlay {
            background-color: rgba(255,255,255,0.7);
            padding: 20px;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>🎉 Selamat Datang di SIPERPUS 📚</h1>
        <p>Perpustakaan digital yang</p> 
           <p> memudahkan akses dan layanan perpustakaan Anda.</p>
        <a href="{{ route('login') }}" class="btn-login">Login</a>
        <a href="{{ url('/anggota/create') }}" class=" btn-login">Form Anggota</a>

    </div>
</body>
</html>