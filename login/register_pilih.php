<?php
include'../header.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Guru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	
	
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Register As
					</span>

					<a href="register_siswa.php" class="btn-face m-b-20">
						<img src="assets/images/lectura.png">
						Siswa
					</a>
					<a href="register_guru.php" class="btn-google m-b-20">
						<img src="assets/images/estudiante.png">
						Guru
					</a>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Already have account?
						</span>

						<a href="login_siswa.php" class="txt2 bo1">
							Login
						</a>
					</div>
				</span>
			</div>
		</div>
	</div>
	
<?php
	include'../footer.php';
?>
</body>
</html>