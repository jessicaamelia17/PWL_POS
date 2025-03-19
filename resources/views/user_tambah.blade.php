@extends('adminlte::page')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <!-- Form untuk m_user -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form untuk tabel m_user</h3>
        </div>
        <form id="quickForm" method="post" action="/user/tambah_simpan">
            {{ csrf_field() }} 
          <div class="card-body">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Masukkan username">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Masukkan password">
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select class="form-control" id="level">
                <option>Administrator</option>
                <option>Manager</option>
                <option>Staff</option>
              </select>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="termsCheck">
              <label class="form-check-label" for="termsCheck">
                I agree to the <a href="#" class="text-primary font-weight-bold">terms of service</a>.
              </label>
            </div>
            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>


  </div>
</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
