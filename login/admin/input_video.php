<?php
	include'sidebar.php';
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Input Data</li>
				<li class="active">Input Video</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Input Video</h1>
			</div>
		</div><!--/.row-->
		

				<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="system/terusan_video.php" method="post" role="form" enctype="multipart/form-data">
								<div class="form-group">
									<label>Judul Video</label>
									<input class="form-control" name="judul_video" placeholder="Masukkan Judul" required="">
								</div>
								<div class="form-group">
									<label>Thumbnail</label>
									<input type="file" name="gambar">
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea class="form-control" rows="8" name="deskripsi" placeholder="Masukkan Deskripsi" required=""></textarea>
								</div>
									<button name="submit" value="Submit" class='btn btn-primary'>Send Video</button>
									<input type="reset" class="btn btn-default" name="reset" value="Cancel">
								</div>
					
								<div class="col-md-6">
								<div class="form-group">
									<label>SRC Video</label>
									<input type="file" name="src" required="">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label>Kelas</label>
									<select class="form-control" name="id_kelas" required="">
										<option value="">Pilih Kelas</option>
										<?php 
											include "../../config/koneksi.php";
											$sql = mysqli_query($con, "select * from kelas");
											while($d=mysqli_fetch_assoc($sql)){
												echo "<option value='".$d['id_kelas']."'>".$d['nama_kelas']."</option>";
											}
										?>
									</select>
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

		<?php
			include'footer.php';
		?>