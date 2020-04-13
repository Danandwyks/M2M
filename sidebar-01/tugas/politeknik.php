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
              </ul>
            </div>
          </div>
        </nav>
<style>
img {
    width: 100%;
    height: auto;
}</style>
        <h2 class="mb-4">Sejarah Politeknik</h2>
		<center><img src ="images/1foto.jpg">
		<p style="text-align:justify">
	Pada tanggal 7 April 1981, di kawasan industri di PT ( Persero) Petrokimia Gresik oleh Menteri Perindustrian Bapak Ir A.R Soehud bersama Menteri Tenaga Kerja Transmigrasi dan Koperasi Bapak Prof Drs. Harun Zein secara simbolis telah diresmikan Loka Latihan Keterampilan ( LOLAPIL ) yang diikuti oleh beberapa perusahaan besar termasukperusahaan yang dimiliki oleh PT Gajah Tunggal Group.

Untuk menindaklanjuti program tersebut maka pada tanggal 14 September 1981, oleh Direksi PT Gajah Tunggal Group secara mandiri meresmikan LOLAPIL Gajah Tunggal Group dengan nama Pendidikan Ahli Teknik Industri Gajah Tunggal ( PATIGAT), dengan membuka program studi kekhususan Teknik Industri. Mengacu pada perkembangan kebutuhan tenaga kerja terampil di tahun 1983-an pada perusahaan Gajah Tunggal Group, maka jurusan di PATIGAT memecah jurusan Teknik Industri menjadi Teknik Mesin dan Elektro. Dan pada tahun 1984 membuka jurusan baru yaitu teknik kimia, selanjutnyajurusan Keuangan & Perbankan ( 1988 ),jurusan Teknik Komputer (1992), serta jurusan Teknik Perikanan ( 1995 ).

Guna meningkatkan kualitas jurusan maka pada tanggal 6 Oktober 1992, telah ditandatangani kerjasama antara Gajah Tunggal Group dengan Institusi Teknologi Bandung ( ITB ). Dua tahunkemudian pada 6 januari 1994, bertempat di Bandung ditandatangani kerjasama antara Pusbangdik Politeknik dengan PATIGAT.

Dengan pertimbangan memikirkan lulusan jangka panjang pada 3 November 1995 telah dilakukan rapat internal Yayasan Bina Dharma Nurharapan Indonesia yang didirikan oleh Direksi Gajah Tunggal Groupsecara resmi memperoleh ijin untuk menggantikan nama PATIGAT menjadi Politeknik Gajah Tunggal dengan program studi Teknik Mesin, Teknik Elektro, Teknik Kimia, Teknik Informatika dan Teknik Perikanan. Hal ini didasarkan pada Surat Keputusan Menteri Pendidikan dan Kebudayaan nomor : 085/D/O/1995, Politeknik Gajah Tunggaldengan status Terdaftar untuk Program Studi Teknik Kimia, Teknik Mesin dan teknikElektro.

Dalam rangka turut serta meningkatkan tenaga terampil yang siap bekerja, Politeknik Gajah Tunggal membuka kembali pendaftaran mahasiswa baru tahun ajaran 2011 – 2012 dengan program studi Teknik Mesin dan teknik Elektro.
</p>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>