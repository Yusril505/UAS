<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "koneksi.php";

if(isset($_POST['register'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi_password'];

    if($password === $konfirmasi) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO user (nis, username, password)
        VALUES ('$nis', '$nama', '$hashed_password')";

        if(mysqli_query($conn, $query)) {
            echo "<script>alert('registrasi berhasil'); window.location= 'login.php';</script>";
        }else {
            echo "<script>alert('NIS sudah terdaftar');</script>";
        }
    }else{
        echo "<script>alert('konfirmasi password salah');</script>";
    }
}

include "Layout/register.html";
?>