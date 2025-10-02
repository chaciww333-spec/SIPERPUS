@extends('layouts.app')

@section('content')
<div class="container">
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

        <div class="col-md-6">
            <div class="card shadow mt-4">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Grafik Peminjaman Harian</h5>
                        <div style="position: relative; height:300px; width:100%;">
                <canvas id="dailyChart"></canvas>
            </div>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow mt-4">
                <div class="card-body">
                    <h5 class="card-title text-center">Status Peminjaman</h5>
                    <div style="width:300px; height:300px; margin:auto;">
                        <canvas id="statusChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctxDaily = document.getElementById('dailyChart').getContext('2d');
    new Chart(ctxDaily, {
        type: 'bar',
        data: {
            labels: ['23-09', '25-09', '26-09', '28-09'],
            datasets: [{
                label: 'Jumlah Peminjaman',
                data: [3, 7, 5, 1],
                backgroundColor: 'rgba(255, 99, 132, 0.6)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    const ctxStatus = document.getElementById('statusChart').getContext('2d');
    new Chart(ctxStatus, {
        type: 'doughnut',
        data: {
            labels: ['Sedang Dipinjam', 'Sudah Dikembalikan'],
            datasets: [{
                data: [5, 12],
                backgroundColor: ['rgba(153, 102, 255, 0.7)', 'rgba(255, 99, 132, 0.7)']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>
@endpush
