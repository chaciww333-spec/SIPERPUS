<!DOCTYPE html>
<html>
<head>
    <title>Kartu Anggota</title>
    <style>
         body {
            background-color: #FBC5C5; /* background halaman pink muda */
            font-family: Arial, sans-serif;
        }
        .card {
            width: 350px;
            height: 200px;
            border: 2px solid #cc0066;
            border-radius: 10px;
            padding: 15px;
            font-family: Arial, sans-serif;
            margin: 30px auto;
            background-color: #FFE1E1;
        }
        .title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .info p { margin: 5px 0; }
        .print-btn {
            display: block;
            width: 120px;
            margin: 15px auto;
            text-align: center;
            background: #FF66A3 ;
            color: white;
            padding: 8px;
            border-radius: 5px;
            text-decoration: none;
        }
        .print-btn:hover { background: #FF66A3 ; }
    </style>
</head>
<body>
    <div class="card">
        <div class="title">KARTU ANGGOTA PERPUSTAKAAN</div>
        <div class="info">
           <p><b>Nama:</b> {{ $anggota->nama }}</p>
            <p><b>Nis:</b> {{ $anggota->nis }}</p>
            <p><b>Kelas:</b> {{ $anggota->kelas }}</p>
            <p><b>Jenis Kelamin:</b> {{ $anggota->jenis_kelamin }}</p>
            <p><b>Nomor Telepon:</b> {{ $anggota->nomor_telepon }}</p>
            <p><b>Tanggal Bergabung:</b> {{ $anggota->tanggal_bergabung }}</p>
        </div>
    </div>

    <a href="javascript:window.print()" class="print-btn">Cetak Kartu</a>
</body>
</html>