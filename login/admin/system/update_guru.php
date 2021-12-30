<?php

	include'../../../config/koneksi.php';

	mysqli_query($con, "UPDATE user_guru SET status='1' WHERE id_guru='$_GET[id_guru]'");
	
?>

<script>	
window.location="../list_guru.php";
</script>

