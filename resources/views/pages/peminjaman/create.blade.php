@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Tambah Peminjaman</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('peminjaman.store') }}" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="anggota_id" class="form-label">Anggota</label>
                                <select name="anggota_id" id="anggota_id" class="form-control" required>
                                    <option value="">-- Pilih Anggota --</option>
                                    @foreach($anggota as $a)
                                        <option value="{{ $a->id }}">{{ $a->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cover</label>
                                <div>
                                   <img id="cover-previe" src="" alt="Belum ada cover"
                                    width="120" style="display:none; border:1px solid #ddd; padding:5px;">
                                </div>
                            </div>
                              <div class="mb-3">
                                <label for="buku_id" class="form-label">Judul</label>
                                <select name="buku_id" id="buku_id" class="form-control" required>
                                    <option value="">-- Pilih Buku --</option>
                                    @foreach($buku as $b)
                                        <option value="{{ $b->id }}" data-cover="{{ asset('storage/images/'.$b->cover) }}">
                                            {{ $b->judul }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                                <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_jatuh_tempo" class="form-label">Tanggal Jatuh Tempo</label>
                                <input type="date" name="tgl_jatuh_tempo" id="tgl_jatuh_tempo" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
        <script>
        document.getElementById('buku_id').addEventListener('change', function() {
            let selectedOption = this.options[this.selectedIndex];
            let coverUrl = selectedOption.getAttribute('data-cover');
            let img = document.getElementById('cover-preview');

            if (coverUrl) {
                img.style.display = 'block';
                img.src = coverUrl;
            } else {
                img.style.display = 'none';
            }
        });
        </script>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
