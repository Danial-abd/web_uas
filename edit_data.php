<?php
    include "koneksi.php";
    $id     = $_GET['npm'];

    $ambilData = mysqli_query($koneksi, "SELECT * FROM tbl_mhs WHERE npm = '$id'");
    $data = mysqli_fetch_array($ambilData);

?>

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
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" name="npm" class="form-control col-md-9" value="<?php echo $data['npm']?>" placeholder="Masukkan NPM">
                    </div>
                    <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control col-md-9" value="<?php echo $data['nama']?>" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control col-md-9" value="<?php echo $data['tempat_lahir']?>" placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control col-md-9" value="<?php echo $data['tanggal_lahir']?>" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                    <p>Jenis Kelamin</p>
                    <label><input type="radio" name="jenis_kelamin" value="L" <?php if($data['jenis_kelamin'] == 'L') echo 'checked'?>>Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin'] == 'P') echo 'checked'?>>Perempuan</label>
                    </div>
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control col-md-9" value="<?php echo $data['alamat']?>" placeholder="Masukkan Alamat">
                    </div>
                    <div class="form-group">
                    <label for="kode_pos">Kodepos</label>
                    <input type="text" name="kode_pos" class="form-control col-md-9" value="<?php echo $data['kode_pos']?>" placeholder="Masukkan Kodepos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

    if(isset($_POST['simpan']))
    {
        $npm       = $_POST['npm'];
        $nama      = $_POST['nama'];
        $tempat_l  = $_POST['tempat_lahir'];
        $tanggal_l = $_POST['tanggal_lahir'];
        $jk        = $_POST['jenis_kelamin'];
        $alamat    = $_POST['alamat'];
        $kode_pos  = $_POST['kode_pos'];

        mysqli_query($koneksi, "UPDATE tbl_mhs SET npm='$npm',nama='$nama',tempat_lahir='$tempat_l',tanggal_lahir='$tanggal_l',jenis_kelamin='$jk',alamat='$alamat',kode_pos='$kode_pos'
        WHERE npm='$id'") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5>Data sedang di simpan, mohon tunggu...</h5></div>";
        echo "<meta http-equiv='refresh' content='1;http://localhost/db_mahasiswa/dt_mhs.php'>";
    }
?>