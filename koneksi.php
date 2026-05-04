<?php
$localhost = "localhost";
$username = "root";
$password = "yaudahbanh";
$database_name = "Latihan1";

$conn = mysqli_connect($localhost, $username, $password, $database_name);

if(!$conn) {
    die('koneksi gagal: ' . mysqli_connect_error());
}