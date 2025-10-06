<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Anggota | Siperpus</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff5f8;
            color: #333;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #ffb6c1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .sidebar h4 {
            color:white;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 10px 0;
            font-size: 16px;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #ffe6ed;
            transform: translateX(5px);
        }

        .content {
            margin-left: 240px;
            padding: 30px;
        }

        .navbar-custom {
            background-color: #ffc6d0;
            padding: 10px 25px;
            border-bottom: 1px solid #f4a8b8;
        }

        .navbar-custom span {
            font-weight: 500;
            color: #444;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 182, 193, 0.3);
        }

        .table thead {
            background-color: #ffb6c1;
            color: white;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4><i class="bi bi-book"></i> Siperpus</h4>
        <a href="{{ route('anggota.dashboard') }}"><i class="bi bi-house me-2"></i> Home</a>
       <li class="nav-item mt-3">
    <a href="{{ route('logout') }}" class="nav-link text-white">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
    </a>
</li>
    </div>

    <nav class="navbar-custom">
        <div class="d-flex justify-content-between align-items-center">
            <span>Selamat Datang, {{ isset($anggota) ? $anggota->nama : 'Anggota' }}</span>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <script>
        function logout() {
            if (confirm('Apakah kamu yakin ingin keluar?')) {
                fetch('/logout', {method: 'POST', headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'} })
                .then(() => window.location.href = '{{ route('anggota.create') }}');
            }
        }
    </script>

</body>
</html>
