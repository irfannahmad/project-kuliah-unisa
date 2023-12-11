<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Edit</h1>
    <form action="{{ route('mataKuliah.update', $mataKuliah->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-2">
            <label for="mataKuliah">Mata Kuliah : </label>
            <input type="text" name="mata_kuliah" id="mataKuliah" class="form-control" value="{{ $mataKuliah->mata_kuliah }}">
        </div>
        <!-- Tambahkan input untuk kelas, jurusan, nama_dosen, jumlah_sks sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</body>

</html>