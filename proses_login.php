<?php
require "koneksi.php";

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='halaman_utama.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='halaman_utama.php';</script>";
    } else {
        include "koneksi.php";
        
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $insert = mysqli_query($conn, "INSERT INTO user (username, password) VALUES ('$username', '$password')");

        if ($insert) {
            echo "<script>alert('Sukses login');location.href='barang.php';</script>";
        } else {
            echo "<script>alert('Gagal login');location.href='halaman_utama.php';</script>";
        }
    }
}
?>
