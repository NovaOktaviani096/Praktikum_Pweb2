<?php
require('model.php');
if (isset($_GET['id_peminjam'])) {
    hapuspeminjaman($_GET['id_peminjam']);
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
		<h2>Data Peminjaman</h2>
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
	<div class="peminjaman">
	    <table border="1">
            <tr>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
				<div class="forms">
			        <button><a href="formpeminjaman.php">tambah</a></button>
	            </div>
            </tr>
            <?= tampildata("peminjaman") ?>
        </table>
	</div>
</body>
</html>