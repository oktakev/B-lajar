<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../../config/koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($con,"select * from user_guru where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	$_SESSION['tipe'] = "guru";
	header("location:../guru/profil_login.php");
}else{
	header("location:../login_guru.php?pesan=gagal");
}
?>

