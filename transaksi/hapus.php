<?php
include "../koneksi.php";

if (isset($_GET['id_transaksi'])) {
    $id_transaksi = $_GET['id_transaksi'];

    // mengecek apakah transaksi sudah dibayar atau belum
    $cek_bayar = mysqli_query($conn, "SELECT bayar FROM transaksi WHERE id_transaksi='$id_transaksi'");
    $data_bayar = mysqli_fetch_assoc($cek_bayar);

    if ($data_bayar['bayar'] == 0) {
        // jika transaksi belum dibayar maka stok akan di kembalikan
        // Ambil dari transaksi
        $barang1 = mysqli_query($conn, "SELECT id_produk, jumlah FROM transaksi WHERE id_transaksi='$id_transaksi'");
        while ($b1 = mysqli_fetch_assoc($barang1)) {
            mysqli_query($conn, "UPDATE produk SET stok = stok + {$b1['jumlah']} WHERE id_produk = '{$b1['id_produk']}'");
        }

        // Ambil dari tabel barang tambahan
        $barang2 = mysqli_query($conn, "SELECT id_produk, jumlah FROM barang WHERE id_transaksi='$id_transaksi'");
        while ($b2 = mysqli_fetch_assoc($barang2)) {
            mysqli_query($conn, "UPDATE produk SET stok = stok + {$b2['jumlah']} WHERE id_produk = '{$b2['id_produk']}'");
        }
    }

    // Hapus transaksi utama dan detail barang
    mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");
    mysqli_query($conn, "DELETE FROM barang WHERE id_transaksi='$id_transaksi'");

    echo "<script>
        alert('Transaksi berhasil dihapus dan stok dikembalikan!');
        document.location='index.php';
    </script>";
}
?>
