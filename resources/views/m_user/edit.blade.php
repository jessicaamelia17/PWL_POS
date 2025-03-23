@extends('m_user/template')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4 bg-light rounded">
        <h2 class="text-center text-dark">Edit User</h2>

        <div class="mb-3">
            <a class="btn btn-secondary btn-sm" href="{{ route('m_user.index') }}">Kembali</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ops!</strong> Error <br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('m_user.update', $useri->user_id) }}" method="POST">
            @csrf 
            @method('PUT')

            <div class="form-group">
                <label class="font-weight-bold">User ID:</label>
                <input type="text" name="userid" value="{{ $useri->user_id }}" class="form-control" placeholder="Masukkan user id">
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Level ID:</label>
                <input type="text" name="levelid" value="{{ $useri->level_id }}" class="form-control" placeholder="Masukkan level">
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Username:</label>
                <input type="text" name="username" value="{{ $useri->username }}" class="form-control" placeholder="Masukkan username">
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Nama:</label>
                <input type="text" name="nama" value="{{ $useri->nama }}" class="form-control" placeholder="Masukkan nama">
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Password:</label>
                <input type="password" name="password" value="{{ $useri->password }}" class="form-control" placeholder="Masukkan password">
            </div>

            <button type="submit" class="btn btn-dark btn-block">Update</button>
        </form>
    </div>
</div>
@endsection
