@extends('layouts.app')

@section('title', 'Dashboard Perpustakaan')

@section('content')
<div class="row">
 
    <div class="col-lg-3 col-6">
        <div class="small-box bg-buku">
            <div class="inner">
                <h3>{{ $total_Buku }}</h3>
                <p>Data Buku</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="{{ route('buku.index') }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-anggota">
            <div class="inner">
                <h3>{{ $total_Anggota }}</h3>
                <p>Data Anggota</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('anggota.index') }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-kategori">
            <div class="inner">
                <h3>{{ $total_Kategori }}</h3>
                <p>Kategori</p>
            </div>
            <div class="icon">
                <i class="fas fa-book-reader"></i>
            </div>
            <a href="{{ route('kategori.index') }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-pustakawan">
            <div class="inner">
                <h3>{{ $total_Pustakawan }}</h3>
                <p>Pustakawan</p>
            </div>
            <div class="icon">
                <i class="fas fa-undo"></i>
            </div>
            <a href="{{ route('pustakawan.index') }}" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    
<div class="row mt-4">
  <div class="col-md-6">
    <h5 class="text-center">Grafik Peminjaman Harian</h5>
    <canvas id="chartPeminjaman" height="200"></canvas>
  </div>

  <div class="col-md-6">
    <h5 class="text-center">Status Peminjaman</h5>
    <canvas id="chartStatus" height="200"></canvas>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var labelsPeminjaman = @json($labels);
  var dataPeminjaman   = @json($totals);

  var dataStatus = [@json($sedangDipinjam), @json($sudahDikembalikan)];

  new Chart(document.getElementById('chartPeminjaman'), {
    type: 'bar',
    data: {
      labels: labelsPeminjaman,
      datasets: [{
        label: 'Jumlah Peminjaman',
        data: dataPeminjaman,
        backgroundColor: '#F48FB1'
      }]
    }
  });

  new Chart(document.getElementById('chartStatus'), {
    type: 'doughnut',
    data: {
      labels: ['Sedang Dipinjam', 'Sudah Dikembalikan'],
      datasets: [{
        data: dataStatus,
        backgroundColor: ['#FFCCBC', '#CE93D8']
      }]
    }
  });
</script>
@endsection
