<?php
include "koneksi.php";

if(isset($_POST['register'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi_password'];

    if($password === $konfirmasi_password) {
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

?>