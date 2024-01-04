<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Form Edit</h1>
    <form action="{{ route('matakuliah.update', $mataKuliah->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="mataKuliah">Mata Kuliah : </label>
            <input type="text" name="mata_kuliah" id="mataKuliah" class="form-control" value="{{ $mataKuliah->nama_mata_kuliah }}">
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
        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-primary">Kembali</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>