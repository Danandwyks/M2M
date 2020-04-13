<?php
require 'functions.php';

$nim = $_POST['nim'];
$password =$_POST['password'];
//$nama = $_POST['nama'];

$sql 	= mysqli_query($koneksi, "SELECT * FROM login WHERE nim = '$nim' AND password = '$password'");

//$sql = mysqli_query($conn,"select * from mahasiswa where nim='$nim' and password='$password'");
$cek=mysqli_num_rows($sql);



if($cek > 0){
$data = mysqli_fetch_assoc($sql);
	$_SESSION['nim'] = $nim;
	$_SESSION['password'] = $data['password'];
	
}

if ($cek > 0) {
header("location:tugas");
}else{
	echo"<script>alert(' NIM atau PASSWORD salah'); window.location = 'index.html'</script>";
}


?>