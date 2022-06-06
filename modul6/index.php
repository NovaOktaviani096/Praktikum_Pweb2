<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Admin</title>
</head>
<body>
	<div class="allert">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman dashboard";
		}
	}
	?>
	</div>
<div class="container">
    <h1>Login Admin</h1>
	<form method="post" action="proses_login.php">
		<label>Username</label><br>
        <input type="text" name="username" placeholder="username"><br>

		<label>password</label><br>
		<input type="password" name="password" placeholder="password"><br>

		<button>Submit</button>
			
	</form>
</div>
<?php include_once 'koneksi.php';
?>
</body>
</html>