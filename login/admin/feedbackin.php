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
				<li class="active">Feedback</li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">FeedBack</h1>
			</div>
		</div><!--/.row-->
		

				<div class="panel panel-default">
					<div class="panel-heading">Daftar feedback masuk <a href="feedbackin.php" style="float: right;">Refresh</a> </div>
					<div class="panel-body">
						<?php
						include_once("../../config/koneksi.php");
						$halaman = 5;
  						$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  						$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
						$result = mysqli_query($con,"SELECT * FROM feedback ORDER BY id DESC");	
						$total = mysqli_num_rows($result);
						$pages = ceil($total/$halaman);
						$query = mysqli_query($con,"select * from feedback LIMIT $mulai, $halaman");
						$no =$mulai+1;
						?>
						<table>
 						 <thead>
 						  <tr>
    					    <th>No</th><th>Name</th> <th>Email</th> <th>Profesion</th> <th>Message</th> <th> Action </th>
  						  </tr>
  						  </thead>
  						  <tbody>
  						  <?php
  						  while($user_data=mysqli_fetch_array($query)){
  						  ?>
  						  <tr>
  						  	<td><?php echo $no++; ?></td>
  						  	<td><?php echo $user_data['name'] ?> <br> on <br> <?php echo $user_data['tanggal'] ?></td>
  						  	<td><?php echo $user_data['email'] ?></td>
  						  	<td><?php echo $user_data['profession'] ?></td>
  						  	<td><?php echo $user_data['message'] ?></td>
  						  	<td><button type="button" class="btn btn-md btn-info" data-toggle="modal" data-target="#myModal<?php echo $no ?>">Posting</button>
								<!-- Modal -->
								<div id="myModal<?php echo $no ?>" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Daftar Feedback Masuk</h4>
								      </div>
								      <div class="modal-body">

								        <div class="form-group">
											<input class="form-control"  value="<?php echo $user_data['name'];?>" disabled="">
										</div>
										<div class="form-group">
											<input class="form-control"  value=<?php echo $user_data['tanggal'];?> disabled="">
										</div>
										<div class="form-group">
											<input class="form-control"  value=<?php echo $user_data['email'];?> disabled="">
										</div>
										<div class="form-group">
											<input class="form-control"  value=<?php echo $user_data['profession'];?> disabled="">
										</div>	
										<div class="form-group">
											<textarea class="form-control" disabled=""><?php echo $user_data['message'];?></textarea>
										</div>
								      </div>
								      <div class="modal-footer">
								        <a href="system/update_posting.php?idfeedback=<?php echo $user_data['id']?>" class="btn btn-default">Posting</a>
								      </div>
								    </div>

								  </div>
								</div>
  						  		| 

  						  		<button onclick="deleteme(<?php echo $user_data['id']; ?>)" name="Delete" value="Delete" class='btn btn-md btn-danger'>Delete</td></tr>
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
                                    window.location = 'system/deletefeedback.php?id='+id
                                     })
                                  } else {
                                    swal("Delete cancelled");
                                  }
                                })};
                            </script>

  						  </tr>
  						  <?php 	
  						   }
  						  ?>
  						  </tbody>
  						  
  					    </table>
						<ul class="pagination pagination-lg">
  							<?php for ($i=1; $i<=$pages ; $i++){ ?>
  							<li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php } ?>
						</ul>
    

							
						
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

		<?php
			include'footer.php';
		?>