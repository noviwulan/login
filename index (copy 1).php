<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Login Dengan PHP dan MySQLi </title>
</head>
<body>

	<br/>

	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
		
 <link rel="stylesheet" href="style.css">
	  <div class="container">
            <form method="post" action="cek_login.php">
                <label>Username</label><br>
                <input type="text" name="username" placeholder="Masukkan username"><br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Masukkan password"><br>
                <button>Log in</button>
            </form>
	    </div> 
</body>
</html>
