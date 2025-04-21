<?php
include "../koneksi.php";

function updateStok($conn, $id_produk, $jumlah) {
    $stok = mysqli_query($conn, "SELECT stok FROM produk WHERE id_produk='$id_produk'");
    $s = mysqli_fetch_assoc($stok);
    $new_stok = $s['stok'] - $jumlah;
    return mysqli_query($conn, "UPDATE produk SET stok='$new_stok' WHERE id_produk='$id_produk'");
}

// Mengarahkan kembali user ke halaman sebelumnya / tujuan
function redirect($id_transaksi) {
    echo "<script>document.location='tambah_produk.php?id_transaksi=$id_transaksi';</script>";
    exit;
}

if (isset($_POST['submit'])) {
    $id_transaksi = ($_POST['id_transaksi']);
    $id_produk = ($_POST['id_produk']);
    $nama_produk = ($_POST['nama_produk']);
    $hargaPCS = ($_POST['hargaPCS']);
    $jumlah = ($_POST['jumlah']);
    $stok = $_POST['stok'];

    // validasi stok barang
    if ($jumlah > $stok) {
        echo "<script>alert('Barang yang dipesan lebih banyak dari stok yang tersedia');</script>";
        
        redirect($id_transaksi);
    }

    $cek_transaksi = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi' AND id_produk='$id_produk'");
    $cek_barang = mysqli_query($conn, "SELECT * FROM barang WHERE id_transaksi='$id_transaksi' AND id_produk='$id_produk'");

    if (mysqli_num_rows($cek_transaksi) > 0) {
        $data = mysqli_fetch_assoc($cek_transaksi);
        // jumlah sebelumnya + jumlah sekarang
        $new_jumlah = $data['jumlah'] + $jumlah;
        // total sebelumnya + (jumlah * hargaPCS)
        $new_total = $data['total'] + ($jumlah * $hargaPCS);
// Data jumlah dan total akan diperbarui.

// Stok produk dikurangi sesuai jumlah pembelian.
        mysqli_query($conn, "UPDATE transaksi SET jumlah='$new_jumlah', total='$new_total' WHERE id_transaksi='$id_transaksi' AND id_produk='$id_produk'");
        // updateStok() dipakai supaya kamu gak perlu nulis ulang logika pengurangan stok setiap kali butuh.
        updateStok($conn, $id_produk, $jumlah);
        redirect($id_transaksi);
    }

    if (mysqli_num_rows($cek_barang) > 0) {
        $data = mysqli_fetch_assoc($cek_barang);
        $new_jumlah = $data['jumlah'] + $jumlah;
        $new_total = $data['total'] + ($jumlah * $hargaPCS);

        mysqli_query($conn, "UPDATE barang SET jumlah='$new_jumlah', total='$new_total' WHERE id_transaksi='$id_transaksi' AND id_produk='$id_produk'");
        updateStok($conn, $id_produk, $jumlah);
        redirect($id_transaksi);
    }

    // Jika produk belum pernah ditambahkan
    $total = $jumlah * $hargaPCS;
    $tanggal = date("Y-m-d, H:i a");

    mysqli_query($conn, "INSERT INTO barang (id_transaksi, id_produk, nama_produk, jumlah, hargaPCS, total, tanggal) VALUES ('$id_transaksi', '$id_produk', '$nama_produk', '$jumlah', '$hargaPCS', '$total', '$tanggal')");
    updateStok($conn, $id_produk, $jumlah);
    redirect($id_transaksi);
}
?>
