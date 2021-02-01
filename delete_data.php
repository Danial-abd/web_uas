<?php
    include "koneksi.php";
    $id     = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM tbl_mhs WHERE npm = '$id'");
    echo "<meta http-equiv='refresh' content='1;http://localhost/db_mahasiswa/dt_mhs.php'>";

?>