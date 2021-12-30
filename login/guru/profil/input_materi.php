
<?php
	include'../../../header.php';
?>

				<div class="container" style="padding-top: 10%;">
					<div class="row d-flex justify-content-center">
						
							<div class="title text-center">
								<h1 class="mb-10">Input Materi</h1>
								<p>Lets take B-lajar for a better future</p>
							</div>
						</div>
					</div>
					<hr width="83%" color="grey">										
			<div class="container" style="padding-top: 10px;">
			<form action="../system/terusan_materi.php" method="post" role="form" enctype="multipart/form-data">
					<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Judul Materi</label>
									<input class="form-control" name="judul_materi" placeholder="Masukkan Judul"  	required="">
								</div>
								
								<div class="form-group">
									<label>Isi Materi</label>
									<textarea class="form-control" rows="8" name="isi_materi" placeholder="Masukkan Isi Materi" required=""></textarea>
								</div>

							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Pilih Gambar</label>
									<br>
									<input type="file" name="gambar" required="">
									<p class="help-block">Example block-level help text here.</p>
								</div>
									<div class="form-group">
									<label>Kelas</label>
									<select class="form-control" name="id_kelas" required="">
										<option value="">Pilih Kelas</option>
										<?php 
											include "../../../config/koneksi.php";
											$sql = mysqli_query($con, "select * from kelas");
											while($d=mysqli_fetch_assoc($sql)){
												echo "<option value='".$d['id_kelas']."'>".$d['nama_kelas']."</option>";
											}
										?>
									</select>
								</div>
									<div class="form-group">
										<label>Pilih PDF</label>
									<br>
										<input type="file" name="pdf">
										<p class="help-block">Example block-level help text here.</p>
								</div>

							</div>
							<div class="col-md-6">
								<br>
									<button name="submit" value="Submit" class='btn btn-primary'>Send Materi</button>
									<input type="reset" class="btn btn-default" name="reset" value="Cancel">
								<br>
								<br>

							</div>
					</div>
						</form>
				</div><!-- /.panel-->
			</div><!-- /.col-->
	</div>
</div>
<br>
	<br>

<?php
	include'../../../footer.php';
?>