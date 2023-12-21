@extends('layouts.master')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Mata Kuliah</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container mb-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">SKS</th>
                </tr>
            </thead>
            <tbody>
                <form action="{{ route('mataKuliah.update', $mataKuliah->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="mataKuliah">Mata Kuliah : </label>
                        <input type="text" name="mata_kuliah" id="mataKuliah" class="form-control" value="{{ $mataKuliah->mata_kuliah }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="kelas">Kelas : </label>
                        <input type="text" name="kelas" id="kelas" class="form-control" value="{{ $mataKuliah->kelas }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jurusan">Jurusan : </label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $mataKuliah->jurusan }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="namaDosen">Nama Dosen : </label>
                        <input type="text" name="nama_dosen" id="namaDosen" class="form-control" value="{{ $mataKuliah->nama_dosen }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="sks">SKS : </label>
                        <input type="text" name="jumlah_sks" id="sks" class="form-control" value="{{ $mataKuliah->jumlah_sks }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>
            </tbody>
        </table>
    </div>
</section>
@endsection