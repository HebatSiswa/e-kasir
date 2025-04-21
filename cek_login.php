<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="Admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		header("location:stok/index.php");
 
	}else if($data['level']=="Kasir"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Kasir";
		header("location:produk/index.php");
 
	}else{
 
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>