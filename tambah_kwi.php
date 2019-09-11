<?php 
	include ('config/conn.php');

	$no_kwi		= $_POST['no_kwi'];
	$penerima	= $_POST['penerima'];
	$pemberi	= $_POST['pemberi'];
	$guna		= $_POST['guna'];
	$nominal	= $_POST['nominal'];
	$tgl_kwi	= $_POST['tgl_kwi'];

	$input = "INSERT INTO kwitansi VALUES('','$no_kwi','$penerima','$pemberi','$guna','$nominal','$tgl_kwi','')";
	//query insert dimasukkan dalam variabel $input

	if ($konek->query($input)) {
		echo "<script> alert('Data $no_kwi berhasil ditambahkan')</script>";
		header('location: index.php');
	}else{
		echo "<script> alert('Data gagal ditambahkan')</script>";
		header('location: index.php');
	}
?>