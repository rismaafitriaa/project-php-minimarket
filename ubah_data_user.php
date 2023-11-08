<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
        include "koneksi.php";
        $qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id_user']."'");
        $data_user=mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Ubah Data User</h3>
    <form action="proses_login.php" method="post">
        Ussername :
        <input class="form-control" type="text" name="username" value= "<?=$data_user['username']?>">
        Password : 
        <input class="form-control" type="text" name="password" value="<?=$data_user['password']?>"> 
        saldo : 
        <input class="form-control" type="integer" name="saldo" value="<?=$data_user['saldo']?>"> 
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
