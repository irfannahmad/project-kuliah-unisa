@extends('layouts.master')
@section('content')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('matakuliah.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Mata Kuliah</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"></h1>
            </div><!-- /.col --><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="container mb-3">
            <h1>Data Mata Kuliah</h1>
            <a href="{{ route('matakuliah') }}" class="btn btn-success mb-3">Tambah Data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp

                    @foreach ($matakuliah as $matkul)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $matkul->nama_mata_kuliah }}</td>
                        <td>{{ $matkul->kelas }}</td>
                        <td>{{ $matkul->jurusan }}</td>
                        <td>{{ $matkul->nama_dosen }}</td>
                        <td>{{ $matkul->jumlah_sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $matkul->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('matakuliah.update', $matkul->id) }}" method="POST" style="display: inline;">
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