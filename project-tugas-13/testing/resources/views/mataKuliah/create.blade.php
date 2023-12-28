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
        <a href="{{ route('mataKuliah.index') }}" class="btn btn-primary">Tampilkan Data</a>
        <form action="{{ route('mataKuliah') }}" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="mataKuliah">Mata Kuliah : </label>
                <input type="text" name="mata_kuliah" id="mataKuliah" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="namaDosen">Nama Dosen : </label>
                <input type="text" name="nama_dosen" id="namaDosen" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label for="sks">SKS : </label>
                <input type="text" name="jumlah_sks" id="sks" class="form-control">
            </div>
            <button class="btn btn-success">Simpan</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>