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
                @php
                $i = 1;
                @endphp

                @foreach ($matakuliah as $matkul)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $matkul->mata_kuliah }}</td>
                    <td>{{ $matkul->kelas }}</td>
                    <td>{{ $matkul->jurusan }}</td>
                    <td>{{ $matkul->nama_dosen }}</td>
                    <td>{{ $matkul->jumlah_sks }}</td>
                    <td>
                        <a href="{{ route('dashboard.edit', $matkul->id) }}" class="btn btn-primary">Edit</a>
                        <!-- Tambahkan form untuk delete -->
                        <form action="{{ route('mataKuliah.destroy', $matkul->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @php
                $i++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection