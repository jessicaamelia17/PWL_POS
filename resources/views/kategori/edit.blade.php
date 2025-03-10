@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kategori</h1>

    {{-- Tampilkan pesan sukses/error (opsional) --}}
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('kategori.update', $kategori->kategori_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kategori_kode" class="form-label">Kode Kategori</label>
            <input type="text" name="kategori_kode" class="form-control" id="kategori_kode"
                   value="{{ old('kategori_kode', $kategori->kategori_kode) }}">
            @error('kategori_kode')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kategori_nama" class="form-label">Nama Kategori</label>
            <input type="text" name="kategori_nama" class="form-control" id="kategori_nama"
                   value="{{ old('kategori_nama', $kategori->kategori_nama) }}">
            @error('kategori_nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
