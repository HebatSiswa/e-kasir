<?php
include "../koneksi.php";

if(isset($_POST['submit'])) {
    $id_produk = htmlspecialchars($_POST['id_produk']);
    $stok = htmlspecialchars($_POST['stok']);

    $query = mysqli_query($conn, "SELECT stok FROM produk WHERE id_produk='$id_produk'");
    $data = mysqli_fetch_array($query);
    $stok_sekarang = $data['stok'];

    $stok_baru = $stok_sekarang + $stok;

$ubah = mysqli_query($conn, "UPDATE produk SET stok='$stok_baru' WHERE id_produk='$id_produk'");

    if($ubah) {
        ?>
        <script>
            alert("Berhasil Ditambah");
            document.location="index.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Gagal Ditambah");
            document.location="index.php";
        </script>
        <?php

    }
}
?>