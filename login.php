<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include "koneksi.php";

if(isset($_POST['login'])) {
    $nis = $_POST['nis'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE nis = '$nis'");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['username'];
            header('location: dashboard.php');
            exit;
        }
    }
    $error = true;
}

include "Layout/login.html";

?>