<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Mahasiswa
                <a href="login.php" style="float:right;" class="btn btn-warning">Logout</a>
            </div>
            <div class="card-body">
                <form action="" method="GET" class="form-item">
                    <input type="text" name="search" placehoder="Cari Nama">
                    <button type="submit" value="cari" class="btn btn-primary">Cari</button>
                    <a href="index.php" class="btn btn-primary">Tambah Data</a>
                </form>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kodepos</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        include "koneksi.php";
                        $no = 1;
                        $nama = "";
                        
                        if(isset($_GET['search']))
                        {
                            $nama = $_GET['search'];
                            $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mhs WHERE nama LIKE '%$nama%'");
                        }else{
                        $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mhs");
                        }
                        while($data=mysqli_fetch_array($tampil))
                        {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['npm']?></td>
                        <td><?php echo $data['nama']?></td>
                        <td><?php echo $data['tempat_lahir']?></td>
                        <td><?php echo $data['tanggal_lahir']?></td>
                        <td><?php echo $data['jenis_kelamin']?></td>
                        <td><?php echo $data['alamat']?></td>
                        <td><?php echo $data['kode_pos']?></td>
                        <td>
                            <a href="edit_data.php?npm=<?php echo $data['npm']?>" class="btn btn-warning">Edit</a>
                            <a href="delete_data.php?npm=<?php echo $data['npm']?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>    
            </div>
        </div>
    </div>
</body>
</html>
