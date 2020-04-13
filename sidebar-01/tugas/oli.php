<?php
	require 'functions.php';	
    $mahasiswa = query("SELECT * FROM `data`");
	
	//kodingan grafik-----------------
	
	$url=$_SERVER['REQUEST_URI'];
    header("Refresh: 2; URL=$url");
    
	$connect = mysqli_connect('remotemysql.com:3306', 'AGJAwPuqA3', 'WDGlPZxwnY', 'AGJAwPuqA3');
    $data_penjualan = mysqli_query($connect, "SELECT jam, SUM(data_wegging) AS total FROM data GROUP BY jam");

    $data_tanggal = array();
    $data_total = array();

    while ($data = mysqli_fetch_array($data_penjualan)) {
      $data_tanggal[] = date('H:i:s', strtotime($data['jam'])); // Memasukan tanggal ke dalam array
      $data_total[] = $data['total']; // Memasukan total ke dalam array
    }
	
	//kodingan grafik-------------------
?>
<!doctype html>
<html lang="en">
  <head>
 
  	<title>Monitoring Oli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv=”refresh” content=”2″>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		
      <style>
        .container {
          width: 100%;
          margin: 15px 10px;
        }

        .chart {
          width: 50%;
          float: left;
          text-align: center;
        }
      </style>
      <script type="text/javascript" src="Chart.bundle.min.js"></script>
		
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
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> kelompok 4 M2M <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Happycoding.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
<h2>Daftar Wegging</h2>  
<body>
      <div class="container">
        <div class="chart">
          <h2>Bar Chart</h2>
          <canvas id="bar-chart"></canvas>
        </div>
        <div class="chart">
          <h2>Line Chart</h2>
          <canvas id="line-chart"></canvas>
        </div>
      </div>

      <script>
        var barchart = document.getElementById('bar-chart');
        var chart = new Chart(barchart, {
          type: 'bar',
          data: {
            labels: <?php echo json_encode($data_tanggal) ?>, // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Weighing',
              data: <?php echo json_encode($data_total) ?>,
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                /*'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)'*/
              ],
              borderColor: [
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)',
                'rgba(255,99,132,1)'
              ],
              borderWidth: 2
            }]
          }
        });

        var linechart = document.getElementById('line-chart');
        var chart = new Chart(linechart, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($data_tanggal) ?>, // Merubah data tanggal menjadi format JSON
            datasets: [{
              label: 'Data Weighing',
              data: <?php echo json_encode($data_total) ?>,
              borderColor: 'rgba(255,99,132,1)',
              backgroundColor: 'transparent',
              borderWidth: 2
            }]
          }
        });
      </script>
    </body>
    
   <hr>  
   <table class="table table-striped table-hover table-sm table-bordered">   
   <thead class="thead-dark"> 
    <tr>   
<th>ID.</th>    
    <th>Data Wegging</th>   
        <th>Tanggal</th>  
    <th>Jam</th>    
	 <th>Option</th>  
        </tr> 
        </thead>  
        <tbody>   
        <?php     //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar  
        $sql = mysqli_query($koneksi, "SELECT a.id,a.data_wegging, a.tanggal,a.jam
        from data as a") 
or die(mysqli_error($koneksi)); 
    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...  
        if(mysqli_num_rows($sql) > 0){      //membuat variabel     
        $no = 1;      //melakukan perulangan while dengan dari dari query $sql 
        while($data = mysqli_fetch_assoc($sql))
        {       //menampilkan data perulangan      
        echo '      
        <tr>     
        <td>'.$data['id'].'</td> 
        <td>'.$data['data_wegging'].'</td>   
        <td>'.$data['tanggal'].'</td>  
        <td>'.$data['jam'].'</td>   
            
        <td>   
     
        <a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>    
    </td>    
        </tr>    
        ';    
        $no++;    
        }     //jika query menghasilkan nilai 0 
    }
        else{     
        echo '    
        <tr>      
        <td colspan="6">Tidak ada data.</td>    
        </tr>     
        ';     
        }     ?>    <tbody> 
  </table>   
	 </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>