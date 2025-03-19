@extends('adminlte::page')

@section('content')
<div class="container-fluid">
  <div class="row">

    <div class="col-md-6">
      <!-- Form untuk m_level -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Form untuk tabel m_level</h3>
        </div>
        <form>
          <div class="card-body">
            <div class="form-group">
              <label for="levelName">Nama Level</label>
              <input type="text" class="form-control" id="levelName" placeholder="Masukkan nama level">
            </div>
            <div class="form-group">
              <label for="levelCode">Kode Level</label>
              <input type="text" class="form-control" id="levelCode" placeholder="Masukkan kode level">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
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
