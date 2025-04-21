<?php
include "../koneksi.php";

if(isset($_GET['id_transaksi'])) {
    $id_transaksi = $_GET['id_transaksi'];

    $hapus = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");

    if($hapus) {
        ?>
        <script>
            alert("Transaksi Berhasil dihapus");
            document.location="index.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Transaksi Gagal dihapus");
            document.location="index.php";
        </script>
        <?php
    }
}

?>