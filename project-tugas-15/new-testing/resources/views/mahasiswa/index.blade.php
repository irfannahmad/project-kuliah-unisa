@extends('layouts.master')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="container mb-3">
            <h1>Data Mata Kuliah</h1>
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-success mb-3">Tambah Data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp

                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->semester }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST" style="display: inline;">
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
    </div>
</section>
@endsection