<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk DESC");
$no=0;
if(isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $query = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' OR harga LIKE '%$keyword%'  OR id_produk LIKE '%$keyword%' ORDER BY id_produk DESC");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>KASIR</title>
    <link rel="shortcut icon" href="assets/img/logo.ico" type="image/x-icon" />
    <style>
      body{
        margin: 0;
        padding: 60px;
      }
      .btn-primary{
      display: block;
      width: 100%;
      text-align: center;
    }
    .card {
        height: 100%; 
        border: none;
      }
      .card-img-top {
        height: 200px; 
        object-fit: cover; 
      }
    </style>
  </head>
  <body>

<!-- NAVBAR START -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary shadow">
  <div class="container">
    <!-- LOGO START -->
    <a class="navbar-brand" href="#">
      <b>ALAMAK</b></a>
<!-- LOGO END -->

<!-- SEARCH BUTTON START -->
    <div class="container">
    <form class="d-flex ms-auto" action="index.php" method="POST">
      <input class="form-control me-2" type="search" name="keyword" placeholder="Cari Produk" aria-label="Search" autofocus>
      <button class="btn btn-transparant" type="submit" name="cari"><i class="bi bi-search"></i></button>
    </form>
  </div>
<!-- SEARCH BUTTON END -->
 <!-- MENU START -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="transaksi/index.php">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" title="Logout" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Logout">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>          </a>
        </li>
      </ul>
 <!-- MENU END -->
    </div>
  </div>
</nav> 
<!-- NAVBAR END -->

<!-- PRODUK START -->
<div class="container-fluid mt-5"> 
      <div class="row gx-0">
        <?php
        while($data = mysqli_fetch_array($query)) {
          $no++;
        ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 mx-3 shadow" style="width: 16rem;"> <!-- Menggunakan margin bottom untuk jarak antar card -->
          <div class="card shadow"> 
            <img src="assets/produk/<?php echo $data['foto'] ?>" class="card-img-top" alt="<?php echo $data['nama_produk'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $data['nama_produk'] ?></h5>
              <p class="card-text">Rp. <?php echo number_format($data['harga']) ?></p>
              <a href="stok/beli.php?id_produk=<?=$data['id_produk']?>" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div> 
    </div> 
<!-- PRODUK END -->







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
</body>
</html>




