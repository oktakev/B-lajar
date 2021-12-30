<?php 
	session_start();
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Blajar</title>
		<?php 
			$url = "http://localhost/blajar/";
		?>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/loader.css">
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/nice-select.css">					
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/animate.min.css">
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo $url; ?>assets/css/main.css">
		</head>
		<body>
			
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div class="navbar-header">
			                </button>
			                <a class="navbar-brand" href="<?php echo $url; ?>index.php">B-Lajar</a>
			            </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="<?php echo $url; ?>index.php">Home</a></li>
				          <li><a href="#about">About Us</a></li>
				          <li><a href="#goal">We Offfer</a></li>
				          <li><a href="#contact">Contact</a></li>
				          <?php
				          if(empty($_SESSION['email']))
            				{	//<?php echo $_SESSION['email']; 
          					?>
          					<li><a href="login/login_siswa.php">Sign In</a></li></li>
				           <?php }
				           else{
				           	?>
				           	<li class="menu-has-children"><a href="/blajar/login/<?php echo $_SESSION['tipe'] ?>/profil_login.php"><?php echo $_SESSION['email'];?></a>
				            <ul>
				              <li><a href="profil/profil_<?php echo $_SESSION['tipe'] ?>.php">Profil</a></li>
				              <li><a href="view/select_view.php">Configuration</a></li>
				              <li><a href="../system/logout_<?php echo $_SESSION['tipe'] ?>.php">Sign Out</a></li>
				            </ul>
				           	<?php
				           } 
				           ?>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
<body>