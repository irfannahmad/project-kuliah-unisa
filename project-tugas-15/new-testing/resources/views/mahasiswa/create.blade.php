@extends('layouts.master')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="container mb-3">
            <h1>Form Input Mahasiswa</h1>
            <form action="{{ route('Mahasiswa') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="nim">NIM : </label>
                    <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="semester">Semester : </label>
                    <input type="text" name="semester" id="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ old('semester') }}">
                    @error('semester')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('mahasiswa') }}" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</section>
@endsection