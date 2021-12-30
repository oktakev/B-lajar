<?php
	include'../../../header.php';
?>

<link rel="stylesheet" type="text/css" href="../../admin/assets/css/feedback.css">

<br>
    <br>
<section class="contact-area section-gap" style="padding-top: 10%;" >
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        
                            <div class="title text-center">
                                <h1 class="mb-10">Material Contents</h1>
                                <p>Lets take B-lajar for a better future</p>
                            </div>
                        </div>
                    </div>                                      
</section>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
				<div class="panel panel-default">
					<div class="panel-heading">
                        <a href="../profil/input_materi.php"><button type="button" class="btn btn-md btn-primary" style="margin-left: 81%; margin-top: 60px"><em class="fa fa-plus"></em>&nbsp; Add Materi</button>
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
                                    <input class="form-control" name="cari" placeholder="Cari Judul Materi...">
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-md btn-primary" style="margin-left:85%;margin-bottom: 10px;"><span class="glyphicon glyphicon-search"></span> Search</button>
                                </div>  
                            </form>

							<?php
// Create database connection using config file
include_once("../../../config/koneksi.php");
$halaman = 5;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;                   
$result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas ORDER BY id_materi DESC");
$total = mysqli_num_rows($result);
$pages = ceil($total/$halaman);
if(isset($_POST['name'])){
    echo $_POST['name'];
    $filter = "where materi.id_kelas = '$_POST[name]' ";
}
else{
    $filter = "";    
}
$query = mysqli_query($con,"SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas $filter ORDER BY id_materi DESC LIMIT $mulai, $halaman");
$no =$mulai+1;
?>
 
    <table >
 
    <tr>
        <thead>
        <th>No</th>
        <th>Judul Materi</th>
        <th>Gambar</th>
        <th>Tanggal Upload</th>
        <th>Isi Materi</th>
        <th>Pdf File</th>
        <th>Kelas</th>
        <th>Action</th>
        </thead>
    </tr>
    <tbody>
    <?php
            if (isset($_POST['submit'])) {
                $cari=$_POST['cari'];
                $result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas WHERE judul_materi LIKE '%$cari%' ORDER BY id_materi DESC");
            }else {
                $result = mysqli_query($con, "SELECT * FROM kelas INNER JOIN materi ON kelas.id_kelas = materi.id_kelas ORDER BY id_materi DESC");
            }

            while ($user_data=mysqli_fetch_array($query)) {  
           
        echo "<tr>";
        echo "<td>".$no++;"<td>";
        echo "<td>".$user_data['judul_materi']."</td>";
        echo "<td><img src='../images/$user_data[gambar]' height='200px' width='200px'></td>";
        echo "<td>".$user_data['tanggal_upload']."</td>";
        echo "<td>".$user_data['isi_materi']."</td>";
        echo "<td> <a href='pdf/$user_data[pdf]'>Materi.pdf </td>";
        echo "<td>".$user_data['nama_kelas']."</td>";
        ?>
        <td>
                    <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#myModal<?php echo $no ?>">Edit</button>
                    <?php

    include_once("../../../config/koneksi.php");
if(isset($_POST['update']))
{   
    $id_materi = $_POST['id_materi'];
    $judul_materi=$_POST['judul_materi'];
    $tanggal_upload=$_POST['tanggal_upload'];
    $isi_materi=$_POST['isi_materi'];
    $id_kelas=$_POST['kelas'];


    // update user data
    if(empty($_FILES['pdf']['name']) && empty($_FILES['gambar']['name'])){
        $result = mysqli_query($con, "UPDATE materi SET judul_materi='$judul_materi',tanggal_upload='$tanggal_upload',isi_materi='$isi_materi',id_kelas='$id_kelas' WHERE id_materi='$id_materi'");
    }
    else if(!empty($_FILES['pdf']['name']) && empty($_FILES['gambar']['name'])){
        
        $pdf=$_FILES['pdf']['name'];
        move_uploaded_file($_FILES['pdf']['tmp_name'], "pdf/".$pdf);

        $result = mysqli_query($con, "UPDATE materi SET judul_materi='$judul_materi',tanggal_upload='$tanggal_upload',isi_materi='$isi_materi',pdf='$pdf',id_kelas='$id_kelas' WHERE id_materi=$id_materi");
    }
    else if(empty($_FILES['pdf']['name']) && !empty($_FILES['gambar']['name'])){

        $gambar=$_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "images/".$gambar);

        $result = mysqli_query($con, "UPDATE materi SET judul_materi='$judul_materi',gambar='$gambar',tanggal_upload='$tanggal_upload',isi_materi='$isi_materi',id_kelas='$id_kelas' WHERE id_materi=$id_materi");
    }
    else if(!empty($_FILES['pdf']['name']) && !empty($_FILES['gambar']['name'])){

        $pdf=$_FILES['pdf']['name'];
        $gambar=$_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "images/".$gambar);
        move_uploaded_file($_FILES['pdf']['tmp_name'], "pdf/".$pdf);

        $result = mysqli_query($con, "UPDATE materi SET judul_materi='$judul_materi',gambar='$gambar',tanggal_upload='$tanggal_upload',isi_materi='$isi_materi',pdf='$pdf',id_kelas='$id_kelas' WHERE id_materi=$id_materi");
    }
    echo "<script>window.location=''</script>";
}
?>
                                <!-- Modal -->
                                <div id="myModal<?php echo $no ?>" class="modal fade" role="dialog">
                                  <div class="modal-dialog"  height="300px">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        
                                      </div>
                                      <div class="modal-body">
                                        <form action="" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="id_materi" class="form-control" value="<?php echo $user_data['id_materi'];?>">
                                            <label>Judul Materi</label>
                                            <input class="form-control"  name="judul_materi" value="<?php echo $user_data['judul_materi'];?>" >
                                        </div>
                                        <div class="form-group">
                                            <label>Select Thumbnail</label>
                                            <br>
                                            <input class="form-control"  name="gambar" type="file"> <br> <img src="
                                            ../images/<?php echo $user_data['gambar'];?>" width="350" height="250">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Upload</label>
                                            <input class="form-control"  name="tanggal_upload" type="date" value=<?php echo $user_data['tanggal_upload'];?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Materi</label>
                                            <textarea class="form-control"><?php echo $user_data['isi_materi'];?></textarea>
                                        </div> 
                                        <label>Select PDF</label>
                                        <input class="form-control" name="pdf" type="file"><br> 
                                        <div class="form-group">
                                            <label>Select Kelas</label>
                                            <select name="kelas" class="form-control">
                                            <?php
                                                    for($i=1;$i<=6;$i++){
                                                        $kelas = "Kelas ".$i." SD";
                                                        $selected = $user_data['nama_kelas']==$kelas ? "selected" : ""; 
                                                        echo "<option value='$i' $selected>$kelas</option>";
                                                    }
                                            ?>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" name="update" class="btn btn-default">update</button>
                                        
                                      </div>
                                  </form>
                                    </div>

                                  </div>
                                </div>
                            <br><br>
      
                            <button onclick="deleteme(<?php echo $user_data['id_materi']; ?>)" name="Delete" value="Delete" class='btn btn-md btn-danger'>Delete</td></tr>
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
                                    window.location = 'system/delete_materi.php?id='+id
                                     })
                                  } else {
                                    swal("Delete cancelled");
                                  }
                                })};
                            </script>

                            <!--if(confirm("Dou you want delete")){
                                        window.location.href='system/delete_materi.php?id='+id+'';
                                        return true;
                                    } -->
<?php
    }
    ?>
</table>
<br>
    <ul class="pagination pagination-lg">
    <?php for ($i=1; $i<=$pages ; $i++){ ?>
    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
    </ul>
    
</div>
</div>
</div>
</button>
</div>
<?php
    include'../../../footer.php';
?>


    <script src="../assets/js/sweetalert.js"></script>


