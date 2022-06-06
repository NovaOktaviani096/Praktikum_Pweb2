<?php 

session_start();


include 'koneksi.php';

$nama_member = $_POST['nama_member'];
$password = $_POST['password'];



$stmt = koneksi()->prepare("SELECT * FROM members where nama_member ='$nama_member' and password='$password'");
$stmt->execute();
$result = $stmt->fetchAll();


if($result){
	$_SESSION['nama_member'] = $nama_member;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>