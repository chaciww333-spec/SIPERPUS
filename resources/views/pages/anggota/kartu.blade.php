<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kartu Anggota</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url("{{ asset('/storage/images/welcome%20siperpus.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            border: 2px solid #000;
            width: 400px;
            background: linear-gradient(135deg,  #FFC1CC ); 
            border-radius: 15px;
            color: #000000;
            padding: 20px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
        }
        .card h2 {
            margin: 0;
            margin-bottom: 15px;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .info {
            display: flex;
            align-items: flex-start;
            text-align: left;
            background: rgba(255, 255, 255, 0.15);
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        .info p {
            margin: 5px 0;
            font-size: 14px;
        }
        
        .print-btn {
            background: white;
            color: #db2777;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }
        .print-btn:hover {
            background: #f3f4f6;
        }
           .foto {
            width: 80px;
            height: 120px;
            border: 2px solid #fff;
            margin-right: 15px;
            float: left;
        }
        
        .data {
            display: flex;
            flex-direction: column;
            gap: 3px;
            flex: 1;
        }
        .header-kartu{
            display: flex;
            align-items: center;  
            justify-content: center; 
            gap: 10px;
            margin-bottom: 15px;
        }
        .header-kartu h2 {
             margin: 0; 
             font-size: 18px;
             font-weight: bold;
             line-height: 1;
        }
       @media print {
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center; 
            align-items: center;     
            height: 100vh;
            background: none !important;
        }

        .card {
            border: 2px solid #000;
            border-radius: 10px;
            width: 9cm;   
            height: 6cm;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 5px rgba(0,0,0,0.5);
            page-break-after: avoid;
        }

        .print-btn {
            display: none !important;
          }

        }
        
    </style>
</head>
<body>
    <div class="card">
        <div class="header-kartu">
        <span class="app-brand-logo demo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64 " fill="none">
                    <path d="M12 8H52V56H12C9.79 56 8 54.21 8 52V12C8 9.79 9.79 8 12 8Z" fill="#E75480"/>
                    <path d="M52 8H44V56H52C54.21 56 56 54.21 56 52V12C56 9.79 54.21 8 52 8Z" fill="#d64572"/>
                    <path d="M16 16H40V20H16V16Z" fill="white"/>
                    <path d="M16 24H36V28H16V24Z" fill="white"/>
                    <path d="M16 32H32V36H16V32Z" fill="white"/>
                </svg>
            </span>
             <h2>KARTU ANGGOTA SIPERPUS</h2>

        </div>
       
        <div class="info">
            <div class="foto-area">
             <img src="{{ $foto }}" class="foto">
             
            </div>
             <div class="data">
            <p><b>Nis:</b> {{ $anggota->nis }}</p>
            <p><b>Nama:</b> {{ $anggota->nama }}</p>
            <p><b>Kelas:</b> {{ $anggota->kelas }}</p>
            <p><b>Jenis Kelamin:</b> {{ $anggota->jenis_kelamin }}</p>
            <p><b>No Telepon:</b> {{ $anggota->nomor_telepon }}</p>
            <p><b>Tanggal Bergabung:</b> {{ \Carbon\Carbon::parse($anggota->tanggal_bergabung)->format('d-m-Y') }}</p>
             </div>
        </div>
        

       

        <button class="print-btn" onclick="window.print()">Cetak Kartu</button>
    </div>
</body>
</html>
 