<?php 
	include "sidebar.php";
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<?php
			include'../../config/koneksi.php';
			$sqlCount = mysqli_query($con, "select count(id) ttl from feedback");
    		$count = mysqli_fetch_assoc($sqlCount);

    		$sqlCountComa = mysqli_query($con, "select count(id_komentar) ttl from komentar");
    		$countcoma = mysqli_fetch_assoc($sqlCountComa);

    		$sqlCountComan = mysqli_query($con, "select count(id_komentar_video) ttl from komentar_video");
    		$countcoman = mysqli_fetch_assoc($sqlCountComan);

    		$ttlKomen = $countcoma['ttl'] + $countcoman['ttl'];

			$sqlCountCom = mysqli_query($con, "select count(id_siswa) ttl from user_siswa");
    		$countcom = mysqli_fetch_assoc($sqlCountCom);

    		$sqlCountComn = mysqli_query($con, "select count(id_guru) ttl from user_guru");
    		$countcomn = mysqli_fetch_assoc($sqlCountComn);
    		?>
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-envelope color-blue"></em>
							<div class="large"><?php echo $count['ttl'] ?></div>
							<div class="text-muted">Total Feedback</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large"><?php echo $ttlKomen ?></div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo $countcom['ttl'] ?></div>
							<div class="text-muted">Users Siswa</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-user color-red"></em>
							<div class="large"><?php echo $countcomn['ttl'] ?></div>
							<div class="text-muted">Users Guru</div>
						</div>
					</div>
				</div>
			</div>
			<!--/.row-->