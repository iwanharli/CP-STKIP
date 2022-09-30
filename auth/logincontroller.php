<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$sql 	= "SELECT * FROM users where username='$username' and password='$password'";
$result = mysqli_query($koneksi, $sql);

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] 	= $username;
	$_SESSION['nama'] 		= $data['nama'];
	$_SESSION['status'] 	= "sudah_login";
	$_SESSION['id_login'] 	= $data['id'];
	header("location:../admin");
} else {
	header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
?>