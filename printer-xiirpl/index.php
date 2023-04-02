<?php

include 'layout/navbar.php';
$produk = query("SELECT * FROM produk");
?>

<div class="produk">
    <h2>data produk yang tersedia</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>nama produk</th>
            <th>harga</th>
            <th>foto</th>
            <th>stok</th>
            <th>deskripsi</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($produk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_produk"]; ?></td>
                <td><?= $data["harga"]; ?></td>
                <td><img src="<?= $data["foto"]; ?>" width="100"></td>
                <td><?= $data["stok"]; ?></td>
                <td><?= $data["deskripsi"]; ?></td>
                <td><a href="detail.php?id=<?= $data['id_produk'];?>">detail</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>