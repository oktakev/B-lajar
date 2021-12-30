<?php

	include'../../../config/koneksi.php';

	mysqli_query($con, "UPDATE feedback SET is_read=1");
	mysqli_query($con, "UPDATE user_guru SET is_read=1");
	
?>