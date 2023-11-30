<?php
$conn = mysqli_connect("localhost", "root", "", "logreg");

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi passwrod tidak sesuai')
        </script>";
        return false;
    }

    // tambahkan user ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
