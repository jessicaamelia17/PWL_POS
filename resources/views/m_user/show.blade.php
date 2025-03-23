@extends('m_user/template')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center text-white bg-black">
                    <h3>Detail User</h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <th class="text-secondary">User ID:</th>
                            <td>{{ $useri->user_id }}</td>
                        </tr>
                        <tr>
                            <th class="text-secondary">Level ID:</th>
                            <td>{{ $useri->level_id }}</td>
                        </tr>
                        <tr>
                            <th class="text-secondary">Username:</th>
                            <td>{{ $useri->username }}</td>
                        </tr>
                        <tr>
                            <th class="text-secondary">Nama:</th>
                            <td>{{ $useri->nama }}</td>
                        </tr>
                        <tr>
                            <th class="text-secondary">Password:</th>
                            <td>
                                <span id="passwordText">********</span>
                                <button class="btn btn-sm btn-outline-dark" onclick="togglePassword()">👁</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-center bg-light">
                    <a class="btn btn-dark" href="{{ route('m_user.index') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        let passwordText = document.getElementById("passwordText");
        if (passwordText.innerText === "********") {
            passwordText.innerText = "{{ $useri->password }}";
        } else {
            passwordText.innerText = "********";
        }
    }
</script>

<style>
    .card {
        border-radius: 10px;
        overflow: hidden;
    }

    .bg-black {
        background-color: black !important;
    }

    .card-header {
        font-weight: bold;
    }

    table th {
        width: 30%;
        font-weight: bold;
        color: black;
    }
</style>

@endsection
