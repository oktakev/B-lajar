<?php
include'../header.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Guru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<center>
				<?php 
				if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
				echo "Anda harus mengisi Username dan Password dengan benar!";
				}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
				}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman utama";
				}
				}
				?>
				</center>
				<form action="system/cek_login_guru.php" method="post" class="login100-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					<a href="login_siswa.php" class="btn-google m-b-20">
						<img src="assets/images/lectura.png">
						Siswa
					</a>

					<a href="#" class="btn-face m-b-20">
						<img src="assets/images/estudiante.png">
						Guru
					</a>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="submit" value="Sign In" class="login100-form-btn">
					</div>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="register_pilih.php" class="txt2 bo1">
							Register
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php
	include'../footer.php';
?>
</body>
</html>