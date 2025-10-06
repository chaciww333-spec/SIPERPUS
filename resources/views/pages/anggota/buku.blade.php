@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">📚 Daftar Buku</h2>
    <div class="row">
        @foreach($buku as $item)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                @if($item->cover)
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top" alt="{{ $item->judul }}">
                @else
                    <img src="https://via.placeholder.com/150x200?text=No+Cover" class="card-img-top" alt="No Cover">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text">
                        <strong>Kategori:</strong> {{ $item->kategori->nama ?? '-' }} <br>
                        <strong>Penulis:</strong> {{ $item->penulis }} <br>
                        <strong>Penerbit:</strong> {{ $item->penerbit }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
