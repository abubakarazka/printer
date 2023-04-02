<?php
session_start();
require 'functions.php';
$id = $_GET["id"];
if (terimaProduk($id)) {
    echo "
            <script type='text/javascript'>
                alert(' produk gagal diverifikasi');
                window.location = 'transaksi.php';
            </script>
        ";
} else {
    echo "
        <script type='text/javascript'>
            alert(' produk berhasil diverifikasi');
            window.location = 'transaksi.php';
        </script>
    ";
}
