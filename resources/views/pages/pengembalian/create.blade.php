@extends('layouts.app')

@section('title', 'Tambah Pengembalian')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3 class="page-title">Tambah Pengembalian</h3>
            <div class="card">
                <div class="card-body">
                        <form action="{{ route('pengembalian.store') }}" method="POST">
                            @csrf
                           <select name="peminjaman_id" class="form-control">
                                @foreach($peminjaman as $p)
                                    <option value="{{ $p->id }}">{{ $p->anggota->nama }} - {{ $p->buku->judul }}</option>
                                @endforeach
                            </select>

                            <div class="mb-3">
                                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian" 
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="denda" class="form-label">Denda</label>
                                <input type="number" name="denda" id="denda" class="form-control" readonly>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
<script>
document.getElementById('tanggal_pengembalian').addEventListener('change', function() {
    let jatuhTempo = new Date(document.getElementById('jatuh_tempo').value);
    let tglKembali = new Date(this.value);

    let dendaInput = document.getElementById('denda');
    let tarif = 1000; // denda per hari
    let denda = 0;

    if (tglKembali > jatuhTempo) {
        let selisihHari = Math.floor((tglKembali - jatuhTempo) / (1000 * 60 * 60 * 24));
        denda = selisihHari * tarif;
    }

    dendaInput.value = denda;
});
</script>
@endsection
