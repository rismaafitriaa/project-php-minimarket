<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil Data User</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID USER</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>SALDO</th>
                <th>AKSI</th>
            </tr>
        </thead>
</body>
            
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
            $no++;?>
            
        <tr> 
                 
            <td><?=$data_user['id_user']?></td>
            <td><?=$data_user['username']?></td> 
            <td><?=$data_user['password']?></td> 
            <td><?=$data_user['saldo']?></td>
            <td><a href="ubah_data_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success">Ubah</a> 
            <a href="hapus.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

        </tr>
            <?php 
            }
            ?>
        </body>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
