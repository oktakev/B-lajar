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
				<li class="active">Input Materi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Input Materi</h1>
			</div>
		</div><!--/.row-->
		

				<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="system/terusan_materi.php" method="post" role="form" enctype="multipart/form-data">
								<div class="form-group">
									<label>Judul Materi</label>
									<input class="form-control" name="judul_materi" placeholder="Masukkan Judul" required="">
								</div>
								
								<div class="form-group">
									<label>Isi Materi</label>
									<textarea class="form-control" rows="8" name="isi_materi" placeholder="Masukkan Isi Materi" required=""></textarea>
								</div>
									<!--<input type="submit" class="btn btn-primary" name="submit" value="Send Materi">-->
									<button name="submit" value="Submit" class='btn btn-primary'>Send Materi</button>
									<input type="reset" class="btn btn-default" name="reset" value="Cancel">
								</div>
					
								<div class="col-md-6">
									<div class="form-group">
										<div class="form-group">
									<label>Pilih Gambar</label>
									<input type="file" name="gambar" required="">
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
									<div class="form-group">
										<div class="form-group">
									<label>Pilih PDF</label>
									<input type="file" name="pdf">
									<p class="help-block">Example block-level help text here.</p>
								</div>
							</div>
						</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

		<?php
			include'footer.php';
		?>