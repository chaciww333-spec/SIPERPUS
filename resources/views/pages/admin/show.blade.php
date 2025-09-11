@extends('layouts.app')
@section('title', 'Detail Admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body p-0">
                <table class="table table-striped">
                    <tr>
                        <th width="25%">ID</th>
                        <td width="10px">:</td>
                        <td>{{ $admin->id }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Nama</th>
                        <td width="10px">:</td>
                        <td>{{ $admin->name }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Email</th>
                        <td width="10px">:</td>
                        <td>{{ $admin->email }}</td>
                    </tr>
                    <tr>
                        <th width="25%">Terdaftar Pada</th>
                        <th width="10px">:</th>
                        <th>{{ $admin->created_at->isoformat('d M Y H:i') }}</th>
                    </tr>
                    <tr>
                        <th width="25%">Terakhir Diperbarui</th>
                        <th width="10px">:</th>
                        <th>{{ $admin->updated_at->isoformat('d M Y H:i') }}</th>
                    </tr>
                </table>
            </div>

            <div class="d-flex gap-2 mt-3">
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                    <span class="ti ti-arrow-left me-1"></span>
                    Kembali
                </a>

                <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-primary">
                    <span class="ti ti-pencil me-1"></span>
                    Edit
                </a>
            </div>
        </div>
    </div>
@endsection
