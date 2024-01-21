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
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="nim">NIM : </label>
            <input type="text" name="nim" id="nim" class="form-control" value="{{ $mmahasiswa->nim }}">
        </div>
        <div class="form-group mb-2">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $mmahasiswa->nama }}">
        </div>
        <div class="form-group mb-2">
            <label for="semester">Semester : </label>
            <input type="text" name="semester" id="semester" class="form-control" value="{{ $mmahasiswa->semester }}">
        </div>
        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('mahasiswa') }}" class="btn btn-primary">Kembali</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>