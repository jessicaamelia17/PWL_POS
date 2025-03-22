@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content_body')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Manage Kategori
            </div>
            <div class="card-body">
                {{-- Tampilkan pesan sukses di atas --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Tombol kecil di sisi kiri --}}
                <a href="/kategori/create" class="btn btn-primary float-left">Add Kategori</a>
                
                {{-- Bersihkan float agar tabel berada di bawah tombol --}}
                <div class="clearfix"></div>

                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
