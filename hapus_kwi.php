<?php
include ('config/conn.php');

$id= $_GET['id'];
$queri = "DELETE FROM kwitansi WHERE id='$id'";
if ($konek->query($queri)) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		header('location: index.php');;
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		header('location: index.php');
	}


?>