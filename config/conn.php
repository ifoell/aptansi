<?php
	$server ="localhost"; //nama server database
	$user ="root"; //nama user database
	$passwd =""; //password database
	$dbs ="aptansi"; //nama database yang digunakan

	$konek=mysqli_connect($server, $user, $passwd, $dbs);
	
	// cek koneksi
	if (mysqli_connect_errno()) {
		echo "Gagal menghubungi Database: ". mysqli_connect_error();
	}
?>