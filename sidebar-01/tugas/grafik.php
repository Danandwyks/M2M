<meta http-equiv=”refresh” content=”2″>
<?php
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
    ?>

    <!DOCTYPE html>
    <html>
    <head>
     
      <title>Membuat Grafik Di PHP dan MySQL menggunakan Chartjs</title>
	     <meta http-equiv=”refresh” content=”2″>
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
    </html>