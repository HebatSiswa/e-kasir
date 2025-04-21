<?php
session_start();
include "../koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>ALAMAK</title>
    <style>
   
      .card-header {
    display: flex;
    align-items: center; 
    justify-content: space-between; 
}
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" onclick="history.back(-1)">
  <b>ALAMAK</b></a>
   
    <div class="container">
    <form class="d-flex mb-1" action="index.php" method="POST">
      <input class="form-control me-2" type="search" name="keyword" placeholder="Cari nota..." aria-label="Search" autofocus>
      <button class="btn btn-primary" type="submit" name="cari"><i class="bi bi-search"></i></button>
    </form>
    </div>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Transaksi</a>
        </li>
        
       
    <li class="nav-item">
        <a class="nav-link active" href="../laporan.php">Laporan</a>
    </li>
    
      </ul>
    </div>
  </div>
</nav>