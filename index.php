<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi</title></head>
<body>
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login")
	{header("location:../index.php?pesan=belum_login");}
	include 'Biodata.html';

	 ?>
	
	<link rel="stylesheet" type="text/css" href="Biodataku.css">

	<h4> <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<a href="logout.php">LOGOUT</a> 
</body>
</html>


