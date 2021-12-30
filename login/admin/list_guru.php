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
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List Guru</h1>
			</div>
		</div><!--/.row-->

						<div class="panel panel-default">
					<div class="panel-heading">Guru yang mendaftar</div>
					<div class="panel-body">

						<?php
						include_once("../../config/koneksi.php");
						$halaman = 5;
  						$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  						$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
						$result = mysqli_query($con,"SELECT * FROM user_guru ORDER BY id_guru DESC");	
						$total = mysqli_num_rows($result);
						$pages = ceil($total/$halaman);
						$query = mysqli_query($con,"select * from user_guru LIMIT $mulai, $halaman");
						$no =$mulai+1;
						?>
						<table>
 						 <thead>
 						  <tr>
    					    <th>No</th><th>Name</th> <th>Email</th> <th>No Handphone</th> <th>Usia</th> <th> Status </th> <th>Opsi</th>
  						  </tr>
  						  </thead>
  						  <tbody>
  						  <?php
  						  while($user_data=mysqli_fetch_array($query)){
  						  ?>
  						  <tr>
  						  	<td><?php echo $no++; ?></td>
  						  	<td><?php echo $user_data['full_name'] ?> <br> on <br> <?php echo $user_data['tanggal_daftar'] ?></td>
  						  	<td><?php echo $user_data['email'] ?></td>
  						  	<td><?php echo $user_data['no_handphone'] ?></td>
  						  	<td><?php echo $user_data['usia'] ?></td>
  						  	<td><em class="fa <?php echo $user_data['status'] == 0 ? 'fa-minus-circle color-red' : 'fa-check-circle color-green' ?>"></em>&nbsp; <i><?php echo $user_data['status'] == 0 ? 'Pending' : 'Accept' ?></i> 
                    
                  </td>
  						  	<td>
                    <?php
                    if($user_data['status'] == 0) {
    						  		echo "<a href='acc_guru.php?id_guru=$user_data[id_guru]'><button name='lihat' class='btn btn-md btn-info'>Keterangan</button></a>
    						  		<br>
    						  		<br>";
                    }
  						  	 ?>
  						  		<button onclick="deleteme(<?php echo $user_data['id_guru']; ?>)" name="Delete" value="Delete" class='btn btn-md btn-danger'>Delete</td></tr>
                            <!--js function delete-->
                            <script language="javascript">
                                 function deleteme(id){
                                  swal({
                                  title: "Are you sure?",
                                  text: "you will not be able to recover this imaginary file!",
                                  icon: "warning",
                                  buttons: true,
                                  dangerMode: true,
                                })
                                .then((willDelete) => {
                                  if (willDelete) {
                                     swal("Poof! Your imaginary file has been deleted!", {
                                        icon: "success",
                                        }).then((ok) => {
                                    window.location = 'system/delete_guru.php?id='+id
                                     })
                                  } else {
                                    swal("Delete cancelled");
                                  }
                                })};
                            </script>
                        </td>
  						</tr>
  						<?php 	
  						   }
  						  ?>
</button>
</tbody>
</table>
      <ul class="pagination pagination-lg">
        <?php for ($i=1; $i<=$pages ; $i++){ ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php } ?>
    </ul>