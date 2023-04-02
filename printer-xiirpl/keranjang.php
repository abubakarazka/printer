<?php

include 'layout/navbar.php';
if (empty($_SESSION["cart"] || isset($_SESSION["cart"]))) {
    echo "
    <script type='text/javascript'>
        alert('keranjang anda masih kosong , silah kan belanja terlebuh dahulu');
        window.location = 'index.php';
    </script>
    ";
}

?>

<div class="keranjang-belanja">
    <h2>keranjang belanja</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>foto</th>
            <th>nama produk</th>
            <th>harga</th>
            <th>qty</th>
            <th>total harga</th>
            <th>aksi</th>
        </tr>

        <?php $grandTotal = 0; ?>
        <?php foreach ($_SESSION["cart"] as $id_produk => $kuantitas) : ?>
            <?php $data = query("SELECT * FROM produk WHERE $id_produk = '$id_produk'")[0]; ?>
            <?php $totalHarga = $data["harga"] * $kuantitas;
            $grandTotal += $totalHarga;
            ?>
            <tr>
                <td><img src="<?= $data["foto"]; ?>" width="100"></td>

                <td><?= $data["nama_produk"]; ?></td>
                <td>Rp. <?= number_format($data["harga"]);  ?></td>
                <td><?= $kuantitas; ?></td>
                <td>Rp. <?= number_format($totalHarga); ?>
                <td><a href="hapuskeranjang.php?id=<?= $data['id_produk']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus produk di keranjang ini')">hapus</a>
                    <a href="editkeranjang.php?id=<?= $data["id_produk"]; ?>">edit</a>
                </td>
            </tr>

        <?php endforeach; ?>
        <tr>
            <td colspan="6">
                total harga yang harus di bayar
                Rp. <?= number_format($grandTotal); ?>
            </td>
        </tr>
        <tr>
            <td><a href="checkout.php">checkout</a></td>
        </tr>
    </table>
</div>