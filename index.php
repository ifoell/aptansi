<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aptansi</title>
	<link rel="stylesheet" href="_resource/dist/css/global.css" type="text/css">
	<link href="_resource/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="_resource/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="_resource/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="_resource/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>
<body class="backg col-md-10 col-md-offset-1">
	<a class="putih" href="index.php"><h1 class="page-header" align="center">Selamat Datang Di Aplikasi Kwitansi</h1></a>
    <div class="col-md-offset-10">
        <a href="kwitansi.php"><button class="btn btn-success"><span class="glyphicon glyphicon-plus">&nbsp Tambah Data</button></a>
    </div>

	<div class="panel panel-primary">
    	<div class="panel-heading">Tabel Kwitansi</div>
        <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No. Kwitansi</th>
                                <th>Penerima</th>
                                <th>Pemberi</th>
                                <th>Kegunaan</th>
                                <th>Nominal</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    	<tbody>
                            <?php
                                include ('config/conn.php'); //memangggil conn untuk menghubungkan ke database
                                $queri = "SELECT * from kwitansi ORDER by no_kwi"; //query untuk memilih data dari tabel database
                                $hasil = $konek->query($queri); //variabel penampung
                                if ($hasil === false) {
                                    trigger_error('Perintah SQL salah! ' . $queri . 'Error: ' . $konek->error, E_USER_ERROR);
                                    //pesan jika tidak perintah SQL salah
                                }else{
                                    //jika perintah SQL benar maka akan memanggil data sesuai pada database
                                    while ($data = $hasil->fetch_array()){
                                    	echo "<tr>
                                    		<td>".$data['no_kwi']."</td>
                                    		<td>".$data['penerima']."</td>
                                    		<td>".$data['pemberi']."</td>
                                    		<td>".$data['guna']."</td>
                                    		<td>".$data['nominal']."</td>
                                    		<td>".$data['tgl_kwi']."</td>"?>
                                    		<td>
                                    			<a href="edit.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp&nbsp
                                    			<a href="hapus_kwi.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>&nbsp&nbsp
                                    			<a href="cetak_kwi.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
                                    		</td>
                                    	</tr>
                                    <?php }
                                }?>
                        </tbody>
					</table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
	</body>

	<script src="_resource/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="_resource/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="_resource/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="_resource/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="_resource/dist/js/global.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</html>