<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>B-lajar Admin</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<?php
			include'../../config/koneksi.php';
			$sqlCount = mysqli_query($con, "select count(id) ttl from feedback where is_read = 0");
    		$count = mysqli_fetch_assoc($sqlCount);

    		$sqlCount = mysqli_query($con, "select count(id_guru) ttl from user_guru where is_read = 0");
    		$count2 = mysqli_fetch_assoc($sqlCount);
    		?>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>B-lajar</span> Admin</a>
				<ul class="nav navbar-top-links navbar-right" id="open1">
					<li class="dropdown" id="open2"><a class="dropdown-toggle count-info" id="open3" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info notif-total"><?php echo $count['ttl'] + $count2['ttl'] ?></span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="feedbackin.php">
								<div><em class="fa fa-envelope"></em> <span class='notif-feedback'><?php echo $count['ttl'] ?></span> New Feedback
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="list_guru.php">
								<div><em class="fa fa-user"></em> <span class='notif-guru'><?php echo $count2['ttl'] ?></span> New Teacher
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="assets/images/man.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<?php
				include_once("../../config/koneksi.php");
 				$result = mysqli_query($con, "SELECT nama FROM user_admin");
				?> 
			<?php  
    		while($user_data = mysqli_fetch_array($result)) {
				echo "<h4>".$user_data['nama']. "</h4>";
				}
    		?>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="halaman_admin.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="input_materi.php"><em class="fa fa-book">&nbsp;</em> Input Materi</a></li>
			<li><a href="tampilan_materi.php"><em class="fa fa-book">&nbsp;</em> Materi</a></li>
			<li><a href="tampilan_video.php"><em class="fa fa-tv">&nbsp;</em> Video</a></li>
			<li><a href="list_guru.php"><em class="fa fa-users">&nbsp;</em> List Guru</a></li>
			<li><a href="feedbackin.php"><em class="fa fa-clone">&nbsp;</em> Feedback</a></li>
			<li><a href="register_admin.php"><em class="fa fa-address-card">&nbsp;</em> Tambah  Admin</a></li>
			<li><a href="login/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/sweetalert.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
	<script>
		$(function() {
			$('#open1').click(function() {
				if(!$('#open2').hasClass('open')) {
					$.post('system/read_notif.php', function() {
						$('.notif-total').text('0');
					});
				}
				else {
					$('.notif-feedback, .notif-guru').text('0');
				}
			})
		})
	</script>
		
</body>
</html>