<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">Portal Siswa SMK Ma'arif NU 1 Ajibarang</span>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="alert alert.info">
            <h3>Selamat Datang <?= $_SESSION['nama']; ?></h3>
            <p>Anda berhasil login ke sistem portal siswa.</p>
        </div>
    </div>
</body>
</html>