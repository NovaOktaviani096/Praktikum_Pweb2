<?php
require('model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modul5</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="head">
        </div>
		<h2>Data Buku</h2>
	<nav>
		<div class="wrapper">
			<div class="logo"><a href=''>5Perpus</a></div>
			<div class="menu">
				<ul>
	
					<li><a href="index.php">Home</a></li>
					<li><a href="member.php">Data Member</a></li>
					<li><a href="buku.php">Data Buku</a></li>
					<li><a href="peminjaman.php">Laporan Peminjaman</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="buku">
	    <table border="1">
            <tr>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
				<div class="forms">
			        <button><a href="formbuku.php">tambah</a></button>
	            </div>
             </tr>
            <?= tampildata("buku") ?>
        </table>
	</div>
</body>
</html>