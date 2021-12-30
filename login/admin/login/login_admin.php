<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blajar-Admin Log In</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-image: url(../images/BG1.jpg);">
	<div class="row" style="margin-top: 150px;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="color: white; text-align: center; background-color: #010101;">Log in</div>
				<div class="panel-body" style="background-color: white;">
									<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
					<form action="cek_login.php" method="post" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password">
							</div>
							<input type="submit" value="Login" class="btn btn-primary"></fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="../assets/js/jquery-1.11.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
