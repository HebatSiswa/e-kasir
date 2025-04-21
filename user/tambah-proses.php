<?php

if (isset($_POST['tambah'])) {
    include('../koneksi.php'); // Pastikan koneksi database sudah benar

    // Ambil data dari form
    $iduser = $_POST['iduser'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

 

    // Query untuk menambahkan data user
    $query = "INSERT INTO user (iduser, username, password, level) VALUES ('$iduser', '$username','$password', '$level')";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo 'Data berhasil ditambahkan! ';
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo 'Gagal menambahkan data! ' . mysqli_error($conn);
        echo '<a href="tambah.php">Kembali</a>';
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    echo '<script>window.history.back()</script>';
}
?>