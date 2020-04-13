<?php
	require 'functions.php';	
    $mahasiswa = query("SELECT * FROM `data`");
?>
<!doctype html>
<html lang="en">
  <head>
 
  	<title>Monitoring Oli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  	<a href='#' class='img logo mb-5' style='background-image: url(images/logogt.png);'></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="politeknik.php">Politeknik</a>
                </li>
	            </ul>
	          </li>
	          <li>
	              <a href="about.php">About</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data Mesin</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="oli.php">Oil Weghing</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="grafik.php">Grafik</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> kelompok 4 M2M <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Happycoding.com</a></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="oli.php">Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
<style>
img {
    width: 100%;
    height: auto;
}</style>
        <h2 class="mb-4">KAMI MAHASISWA POLTEK</h2>
		<center><img src ="images/3apel.jpg" alt="Nature" class="responsive">
		<p style="text-align:justify">
	Kami mahasiswa Politeknik Gajah Tunggal tidak akan berhenti dalam berkarya, kami selalu mencari cara membuat segala sesuatunya lebih mudah, kami bukan mahasiswa yang hanya meminta ilmu dari dosen, tapi kami siap mencari segala ilmu yang ada hanya untuk membantu pekerjaan di Plant.</p>
     <p style ="center" font-style="bold"> "Bandung-1999-Gilang Pacarnya Meli"<p/> </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>