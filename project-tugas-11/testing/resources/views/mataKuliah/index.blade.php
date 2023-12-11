<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mb-3">
        <h1>Form Input Mata Kuliah</h1>
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
                @foreach ($matakuliah as $matkul)
                <tr>
                    <td>1</td>
                    <td>{{ $matkul->nama_matakuliah }}</td>
                    <td>{{ $matkul->kelas }}</td>
                    <td>{{ $matkul->jurusan }}</td>
                    <td>{{ $matkul->nama_dosen }}</td>
                    <td>{{ $matkul->jumlah_sks }}</td>
                    <td>
                        <a href="{{ route('mataKuliah.edit') }}" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>