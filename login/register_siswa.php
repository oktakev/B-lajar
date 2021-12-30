	<?php
	include'../header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Siswa</title>
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
				<form action="system/terusan_register_siswa.php" method="post" class="login100-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Register Siswa
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Full Name
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="full_name" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							No Handphone
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="no_handphone" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Kelas
						</span>
					</div>
					<div class="wrap-input100">
						<Select class="input100" name="kelas" required>
							<option>--Select Kelas--</option>
							<option>Kelas 1 SD</option>
							<option>Kelas 2 SD</option>
							<option>Kelas 3 SD</option>
							<option>Kelas 4 SD</option>
							<option>Kelas 5 SD</option>
							<option>Kelas 6 SD</option>
						</Select>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="Password" name="password" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Re-type Password
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="Password" name="retype_password" required>
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="Submit" value="Sign In" class="login100-form-btn">
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Already have account?
						</span>

						<a href="login_siswa.php" class="txt2 bo1">
							Login
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

