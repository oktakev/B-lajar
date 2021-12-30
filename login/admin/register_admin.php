<?php
	include'sidebar.php';

?>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styles.css" rel="stylesheet">


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Feedback</li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registrasi Admin</h1>
			</div>
		</div><!--/.row-->
		

				<div class="panel panel-default">
					<div class="panel-heading">Tambah Admin</div>
					<div class="panel-body">
						<div class="col-md-6">
									<div class="form-group">
								
		<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="system/terusan_register_admin.php" method="post" role="form">
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Nama
						</span>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="nama" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="username">
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="form-group">
						<input class="form-control" type="Password" name="password" required>
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Re-type Password
						</span>
					</div>
					<div class="form-group">
						<input class="form-control" type="Password" name="retype_password" required>
					</div>
					<br>
					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="Submit" value="Tambah" class="btn btn-primary">
					</div>

					
				</form>
			</div>
		</div>
	</div>
						
								
						
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

		<?php
			include'footer.php';
		?>