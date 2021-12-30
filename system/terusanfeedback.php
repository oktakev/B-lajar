<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		include_once("../config/koneksi.php");
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = date("Y-m-d H:i:s");
		$name = 				$_POST['name'];
		$email = 			$_POST['email'];
		$profession = 	$_POST['profession'];
		$message = 			$_POST['message'];
		// Insert user data into table
		$result = mysqli_query($con, "INSERT INTO feedback VALUES('','$tanggal','$name','$email','$profession','$message','0','0')");
		}
	?>

<script>	
window.location="../index.php";
</script>

