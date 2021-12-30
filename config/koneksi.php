<?php

$user = "root";
$password = "";
$localhost = "localhost";
$database = "blajar";
$con = mysqli_connect($localhost, $user, $password);

if(!$con){
	echo "error";
}
else {
	mysqli_select_db($con, $database);
	echo "";
}

?>