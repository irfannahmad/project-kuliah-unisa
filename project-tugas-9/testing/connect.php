<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_testing";

$koneksi = mysqli_connect($host, $user, $pass);
if ($koneksi) {
    $buka = mysqli_select_db($koneksi, $database);
    echo "Database terhubung";
    if (!$buka) {
        echo "Database tidak terhubung";
    }
} else {
    echo "MySQL tidak terhubung";
}
