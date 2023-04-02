<?php

session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if($_SESSION["roles"] != "admin"){
    echo "
    <script type='text/javascript'>
        alert('Mohon maaf anda bukan admin, enggak bisa masuk kesini!')
        window.location = '../login/index.php';
    </script>
    ";
}


?>

<?php require '../layout/sidebar.php'; ?>

<div class="content">
    <h2>
        Halo selamat datang <?= $_SESSION["nama_lengkap"]; ?> <br />
        Ini adalah Halaman Admin
    </h2>
</div>