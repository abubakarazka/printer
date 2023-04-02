<?php 
session_start();

$id = $_GET["id"];
unset($_SESSION["cart"][$id]);
echo "
    <script type='text/javascript'>
        alert('produk telah di hapus');
        window.location = 'index.php';
    </script>
    ";

if(isset($_SESSION["cart"]) < 0 ){
    echo "
    <script type='text/javascript'>
        alert('produk telah di hapus');
        window.location = 'index.php';
    </script>
    ";
}

?>