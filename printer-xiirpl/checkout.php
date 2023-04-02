<?php include 'layout/navbar.php'; ?>

<?php
if (empty($_SESSION["cart"] || isset($_SESSION["cart"]))) {
    echo " 
    <script type='text/javascript'>
        alert('Keranjang Anda Masih Kosong, Silahkan Belanja Terlebih Dahulu');
        window.location= 'index.php'
    </script>
    ";
}
?>

<div class="checkout">
    <form action="" method="POST">
        <label for="tanggal_transaksi">Tanggal Transaksi</label><br>
        <input type="text" name="tanggal_transaksi" id="tanggal_transaksi" value="<?= date('Y-m-d'); ?>"><br><br>

        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat"><br><br>

        <label for="no_telp">No Telephone</label><br>
        <input type="number" name="no_telp" id="no_telp"><br><br>

        <label for="nama_lengkap">Nama penerima</label><br>
        <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $_SESSION["nama_lengkap"]; ?>"><br><br>

        <?php foreach ($_SESSION["cart"] as $id_produk => $kuantitas) : ?>
            <?php
            $data = query("SELECT * FROM produk WHERE id_produk = '$id_produk'")[0];
            $subTotal = $data["harga"] * $kuantitas;
            ?>
            <label for="nama_produk">Nama Produk</label><br>
            <input type="text" name="nama_produk" id="nama_produk" value="<?= $data["nama_produk"]; ?>"><br><br>

            <label for="harga">Harga Produk</label><br>
            <input type="text" name="harga" id="harga" value="<?= $data["harga"]; ?>"><br><br>

            <label for="subtotal">Sub Total Harga</label><br>
            <input type="text" name="subtotal" id="subtotal" value="<?= $subTotal; ?> ">

            <input type="hidden" name="foto" value="<?= $data["foto"]; ?>"><br><br>
        <?php endforeach; ?>

        <button type="submit" name="checkout">Checkout</button>
    </form>
</div>

<!-- fungsi cekout -->
<?php
if (isset($_POST['checkout'])) {
    if (checkoutProduct($_POST) > 0) {
        echo "
        <script type = 'text/javascript'>
        alert('Yeaayyy!Barang Berhasil Di Checkout, silahkan ditunggu proses verifikasinya yaaaaaa!!');
        window.location='index.php';
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!-- fungsi cekout -->