<?php
require('model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modul6</title>
	<link rel="stylesheet" href="style.css">
</head>
<body> 
        <div class="head">
		</div>
        <h2>Data Member</h2>
	<nav>
		<div class="wrapper">
			<div class="logo"><a href=''>5Perpus</a></div>
			<div class="menu">
				<ul>
	
					<li><a href="dashboard.php">Home</a></li>
					<li><a href="member.php">Data Member</a></li>
					<li><a href="buku.php">Data Buku</a></li>
					<li><a href="peminjaman.php">Laporan Peminjaman</a></li>
					<li><a href="logout.php">Log out</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="member">
	    <table border="1">
            <tr>
                <th>Nama</th>
                <th>nomor_member</th>
				<th>password</th>
                <th>alamat</th>
                <th>Tgl daftar</th>
                <th>tgl bayar</th>
                <th>Aksi</th>
				<div class="forms">
			        <button><a href="formmember.php">tambah</a></button>
	            </div>
            </tr>
            <?= tampildata("members") ?>
        </table>
	</div>
</body>
</html>