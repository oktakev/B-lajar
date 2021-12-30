<?php
	include'../../../header.php';
?>
<link rel="stylesheet" type="text/css" href="../../admin/assets/css/feedback.css">


<br>
    <br>
<section class="contact-area section-gap" style="padding-top: 10%;">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        
                            <div class="title text-center">
                                <h1 class="mb-10">Video Contents</h1>
                                <p>Lets take B-lajar for a better future</p>
                            </div>
                        </div>
                    </div>                                      
</section>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		

				<div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="../profil/input_video.php"><button type="button" class="btn btn-md btn-primary" style="margin-left: 81%; margin-top: 60px"><em class="fa fa-plus"></em>&nbsp; Add Video</button>
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <form method="post" id="report_filter" action="<?= $_SERVER['PHP_SELF'];?>" >
                                <select name="name" class="form-control" onchange="document.getElementById('report_filter').submit(); " > 
                                    <option value="--">Filter Berdasarkan</option>
                                    <option value="1">Kelas 1 SD</option>
                                    <option value="2">Kelas 2 SD</option>
                                    <option value="3">Kelas 3 SD</option>
                                    <option value="4">Kelas 4 SD</option>
                                    <option value="5">Kelas 5 SD</option>
                                    <option value="6">Kelas 6 SD</option>
                                </select>
                            </form>
                            </div>
                        <form action="" method="POST">
                                <div class="form-group">
                                    <input class="form-control" name="cari" placeholder="Cari Judul video...">
                                    <br>
                                   <button type="submit" name="submit" class="btn btn-md btn-primary" style="margin-left:85%;margin-bottom: 10px;"><span class="glyphicon glyphicon-search"></span> Search</button>
                                </div>  
                        </form>

                        </div>



<?php
// Create database connection using config file
include_once("../../../config/koneksi.php");
$halaman = 3;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;                        
$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN video ON kelas.id_kelas = video.id_kelas ORDER BY id_video DESC");
$total = mysqli_num_rows($result);
$pages = ceil($total/$halaman);
if(isset($_POST['name'])){
    $filter = "where video.id_kelas = '$_POST[name]' ";
}
else{
    $filter = "";    
}
$query = mysqli_query($con,"SELECT * FROM kelas INNER JOIN video ON kelas.id_kelas = video.id_kelas $filter ORDER BY id_video DESC LIMIT $mulai, $halaman");
$no =$mulai+1;
?>
 
    <table class="table table-hover" >
 
    <tr>
        <thead>
        <th>no</th>
        <th>Judul Video</th>
        <th>Tanggal Upload</th>
        <th>Thumbnail</th>
        <th>Deskripsi</th>
        <th>Video</th>
        <th>Kelas</th>
        <th>Action</th>
       
        </thead>
    </tr>

    <?php  
        if (isset($_POST['submit'])) {
                $cari=$_POST['cari'];
                $result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN video ON kelas.id_kelas = video.id_kelas WHERE judul_video LIKE '%$cari%' ORDER BY id_video DESC");
        }else {
                $result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN video ON kelas.id_kelas = video.id_kelas ORDER BY id_video DESC");
            }
        while($user_data = mysqli_fetch_array($query)) {  
           
        echo "<tr>";
        echo "<td>".$no++;"<td>";
        echo "<td>".$user_data['judul_video']."</td>";
        echo "<td>".$user_data['tanggal_upload']."</td>";
        echo "<td><img src='../images/$user_data[gambar]' height='150px' width='200px'></td>";
        echo "<td>".$user_data['deskripsi']."</td>";
        echo "<td><video width='150'  height='100' controls>
                <source src='../videos/" . $user_data["src"] . "' type='video/mp4'>
              </video></td>";
        echo "<td>".$user_data['nama_kelas']."</td>";
    ?>
        <td>
                    <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#myModal<?php echo $no ?>">Edit</button>
                                <!-- Modal -->
                                <div id="myModal<?php echo $no ?>" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        
                                      </div>
                                      <div class="modal-body">

                                        <div class="form-group">
                                            <label>Video Title</label>
                                            <input class="form-control"  value="<?php echo $user_data['judul_video'];?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Select Upload Date</label>
                                            <input class="form-control" type="date" value=<?php echo $user_data['tanggal_upload'];?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Image</label>
                                            <input class="form-control"  type="file"> <br> <img src="../images/<?php echo $user_data['gambar'];?>" width="350" height="250">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control"><?php echo $user_data['deskripsi'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Video</label>
                                            <input class="form-control"  type="file"> <br> <video width='450'  height='200' controls>    
                                                <source src="../videos/<?php echo $user_data['src'];?>" type="video/mp4">>
                                            </video>
                                        </div>  
                                        <div class="form-group">
                                            <label>Select Class</label>
                                            <select class="form-control">
                                            <?php
                                                    for($i=1;$i<=6;$i++){
                                                        $kelas = "Kelas ".$i." SD";
                                                        $selected = $user_data['nama_kelas']==$kelas ? "selected" : ""; 
                                                        echo "<option $selected>$kelas</option>";
                                                    }
                                            ?>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                      </div>
                                    </div>

                                  </div>
                                </div>
                            <br><br>

                    <button onclick="deleteme(<?php echo $user_data['id_video']; ?>)" name="Delete" value="Delete" class='btn btn-md btn-danger'>Delete</td></tr>
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
                                    window.location = 'system/delete_video.php?id='+id
                                     })
                                  } else {
                                    swal("Delete cancelled");
                                  }
                                })};
                            </script>


    <?php
    }
    ?>
</table>
    <ul class="pagination pagination-lg">
        <?php for ($i=1; $i<=$pages ; $i++){ ?>
            <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php } ?>
    </ul>
    
</div>
</div>
</div>

<?php
    include'../../../footer.php';
?>

    <script src="../assets/js/sweetalert.js"></script>