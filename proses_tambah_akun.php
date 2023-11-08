<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $saldo = $_POST['saldo'];

    if  (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='login.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='login.php';</script>";
    } elseif (empty($saldo)) {
        echo "<script>alert('saldo tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "koneksi.php";
        
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $saldo = mysqli_real_escape_string($conn, $saldo);

        $insert = mysqli_query($conn, "INSERT INTO user (username, password, saldo) VALUES ('$username', '$password', '$saldo')");
        
        if ($insert) {
            echo "<script>alert('Sukses menambahkan akun');location.href='barang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambah akun');location.href='tambah_akun.php';</script>";
        }
    }
}
?>

