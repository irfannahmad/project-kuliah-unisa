<?php
$nama_lengkap = $_POST['nama'];

$conn = new mysqli('localhost', 'root', '', 'db_testing');

if ($conn->connect_error) {
    die('Connect Failed :' . $conn->connect_error);
} else {
    $cek = $conn->prepare("INSERT INTO resgistrasi(nama) VALUES(?)");
    $cek->bind_param("s", $nama_lengkap);
    $cek->execute();
    echo "Registrasi berhasil";
    $cek->close();
    $conn->close();
}
