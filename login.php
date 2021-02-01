<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Login
            </div>
            <div class="card-body">
                <form action="" method="post" class="form-item">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    <button type="submit" class="btn btn-danger" name="daftar">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['submit']))
    {
        $username       = $_POST['username'];
        $pass           = $_POST['password'];

        $user   = mysqli_query($koneksi, "SELECT * FROM logindb WHERE username='$username' and password ='$pass'");
        $chek   = mysqli_num_rows($user);
        if($chek>0)
        {
            header("location:dt_mhs.php");
        }
        else
        {
            header("location:login.php");
        }
    }
    if(isset($_POST['daftar']))
    {
        header("location:logaccount.php");
    }
?>