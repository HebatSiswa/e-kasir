<?php
if (isset($_POST['simpan'])) {
    include('../koneksi.php'); // Pastikan koneksi database sudah benar

    // Ambil data dari form
    $id = $_POST['id'];
    $iduser = $_POST['iduser'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // Update data user
    $update = mysqli_query($conn, "UPDATE user SET iduser='$iduser', username='$username', password='$password', level='$level' WHERE iduser='$id'");

    if ($update) {
        echo 'Data berhasil disimpan! ';
    } else {
        echo 'Gagal menyimpan data! ' . mysqli_error($conn); 
    }
    echo '<a href="index.php">Kembali</a>'; 
} else {
    echo '<script>window.history.back()</script>';
}
?>