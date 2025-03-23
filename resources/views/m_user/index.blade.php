@extends('m_user/template') 

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h2 class="mb-3">CRUD User</h2>
            <a class="btn btn-success" href="{{ route('m_user.create') }}">Input User</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div> 
@endif

<!-- TABEL MENYESUAIKAN UKURAN HALAMAN -->
<table class="table table-striped table-hover custom-table">
    <thead class="table-dark">
        <tr>
            <th class="text-center">User ID</th>
            <th class="text-center">Level ID</th>
            <th class="text-center">Username</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Password</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($useri as $m_user)
    <tr>
        <td>{{ $m_user->user_id }}</td>
        <td>{{ $m_user->level_id }}</td>
        <td>{{ $m_user->username }}</td>
        <td>{{ $m_user->nama }}</td>
        <td class="password-cell">{{ $m_user->password }}</td>
        <td class="text-center">
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<style>
    /* Pastikan tabel menyesuaikan ukuran layar */
    .custom-table {
        width: 100%; /* Pastikan tabel mengambil seluruh lebar */
        table-layout: auto; /* Mengatur ukuran kolom secara otomatis */
        font-size: 14px; /* Ukuran font lebih kecil agar rapi */
    }
    
    /* Pastikan teks panjang dalam sel tidak memaksa tabel melebar */
    .custom-table td, .custom-table th {
        word-wrap: break-word;
        white-space: normal; /* Pastikan teks bisa turun ke baris berikutnya */
    }

    /* Khusus kolom password agar teks panjang tidak merusak layout */
    .password-cell {
        max-width: 200px; /* Batasi lebar maksimum */
        overflow-wrap: break-word; /* Pastikan teks panjang terpotong rapi */
    }

    /* Ukuran lebih kecil di layar mobile */
    @media (max-width: 768px) {
        .custom-table {
            font-size: 12px;
        }
        
        .btn-sm {
            font-size: 10px;
            padding: 3px 6px;
        }
    }
</style>

@endsection