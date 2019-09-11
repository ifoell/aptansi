<?php 
	include ('config/conn.php');

	$no_kwi		= $_POST['no_kwi'];
	$penerima	= $_POST['penerima'];
	$pemberi	= $_POST['pemberi'];
	$guna		= $_POST['guna'];
	$nominal	= $_POST['nominal'];
	$tgl_kwi	= $_POST['tgl_kwi'];

	$input = "UPDATE kwitansi SET penerima = '$penerima',
								  pemberi = '$pemberi',
								  guna = '$guna',
								  nominal = '$nominal',
								  tgl_kwi = '$tgl_kwi'
								  WHERE no_kwi = '$no_kwi'";

	if ($konek->query($input)) {
		echo "<script> alert('Data $no_kwi berhasil diubah')</script>";
		header('location: index.php');
	}else{
		echo "<script> alert('Data gagal diubah')</script>";
		header('location: index.php');
	}
?>