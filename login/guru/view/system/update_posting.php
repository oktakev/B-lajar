<?php

	include'../../../config/koneksi.php';

	mysqli_query($con, "UPDATE feedback SET status='1' WHERE id='$_GET[idfeedback]'");
	
?>

<script>	
window.location="../feedbackin.php";
</script>

