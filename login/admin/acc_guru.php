<?php
	include'sidebar.php';
?>


<link rel="stylesheet" type="text/css" href="assets/css/feedback.css">


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List Guru</li>
				<li class="active">info Guru</li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Biodata Guru</h1>
			</div>
		</div><!--/.row-->
<?php
include_once("../../config/koneksi.php"); 
// Fetch all users data from database

$id_guru = $_GET['id_guru'];
$result = mysqli_query($con, "SELECT * FROM user_guru WHERE id_guru=$id_guru ORDER BY id_guru DESC");
?>

<?php  
		$user_data = mysqli_fetch_array($result)
	?>
	
						<div class="panel panel-default">
					<div class="panel-heading">Lampiran Guru</div>
					<div class="panel-body">
						<div class="col-md-5">
								<div class="form-group">
									<label>Profesi</label>
									<input class="form-control"  disabled="" value="<?php echo $user_data['profesi']; ?>">
								</div>
								
								<div class="form-group">
									<label>Bukti Profesi</label>
									<img class="thumbnail" src="../berkas/<?php echo $user_data['bukti']; ?>" width="100%">
								</div>
									<a href="system/update_guru.php?id_guru=<?php echo$user_data['id_guru']?>"><button name="submit" value="Submit" class="btn btn-primary">Accept Teacher</button></a>	
									<input type="reset" class="btn btn-default" name="reset" value="Cancel">
								</div>
								<div class="col-md-5">
								<div class="form-group">
									<label>Pendidikan Terakhir</label>
									<input class="form-control" disabled="" value="<?php echo $user_data['pendidikan_terakhir']; ?>">
								</div>

								<div class="form-group">
									<label>Ijazah</label>
									<img class="thumbnail" src="../berkas/<?php echo $user_data['ijazah']; ?>" width="100%">
								</div>
								<div class="form-group">
									<label>Sertifikat</label>
									<img class="thumbnail" src="../berkas/<?php echo $user_data['sertifikat']; ?>" width="100%">
								</div>

							</div>
						</div>
							</form>
						</div>
