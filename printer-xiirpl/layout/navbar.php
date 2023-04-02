<?php 
require 'function.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko printer</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="sub-navbar">
                <a href="">toko printer</a>

                <div>
                    <ul class="menu">
                        <li><a href="index.php">beranda</a></li>
                        <li><a href="admin/produk.php">produk</a></li>
                        <li><a href="admin/transaksi.php">data transaksi</a></li>
                        <li><a href="keranjang.php">keranjang belanja</a></li>
                    </ul>
                </div>
                <?php if(isset($_SESSION["username"])): ?>
                <div class="auth">
                    <a href="#"><?= $_SESSION["nama_lengkap"];?></a>
                    <a href="logout.php">logout</a>
                </div>
                <?php endif; ?>

                <?php  if(!isset($_SESSION["username"])) : ?>
                <div class="auth">
                    <a href="login/index.php">login</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
</body>
</html>