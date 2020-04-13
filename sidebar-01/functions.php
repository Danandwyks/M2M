<?php 
	$koneksi = mysqli_connect("remotemysql.com:3306","AGJAwPuqA3","WDGlPZxwnY","AGJAwPuqA3");
	function query($query) {
		global $koneksi;
		$hasil = mysqli_query($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($hasil)) {
			$rows[] = $row;

		}
		return $rows;
	}
	
 ?>