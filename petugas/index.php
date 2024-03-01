<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
    //kembali ke halaman login
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
</head>

<body style="background-image: url('../img/Background.ukk.jpeg');">
    <?php include "navbar.php"; ?>
    <div class="container">
        <br>
        <h1 style="text-align: center;"><b>Dasboard</b></h1>
        <img src="../img/kasir.jpg" alt="" class="img-fluid">
        <div class="card" style="background-color: transparent;">
            <div class="card-header">
                <b>ID : <?= $_SESSION['id_login']; ?></b>
            </div>

            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p style="text-indent: $_COOKIE;" white;">Pengguna</p>
                    <footer class="blockquote-footer"><b><?= $_SESSION['nama_pengguna']; ?></b></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <!-- ID : <?= $_SESSION['id_login']; ?> <br> Pengguna : <?= $_SESSION['nama_pengguna']; ?> -->

</body>

</html>