<?php

$conn = mysqli_connect("localhost", "root", "", "penjualan");

if(!$conn) {
    die("Gagal koneksi ke database: " . mysqli_connect_error());
}
