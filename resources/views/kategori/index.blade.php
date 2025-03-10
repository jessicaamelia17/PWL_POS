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
                {{-- Tombol kecil di sisi kiri --}}
                {{-- Bersihkan float agar tabel berada di bawah tombol --}}
                <div class="clearfix"></div>
                
                {!! $dataTable->table() !!}
                <a href="{{ route('kategori.create') }}" 
                   class="btn btn-primary btn-sm mb-3 float-start">
                    Add Kategori
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush
