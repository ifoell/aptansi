<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>APTANSI</title>
	<link rel="stylesheet" href="_resource/dist/css/global.css" type="text/css">
	<link href="_resource/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="_resource/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body class="backg">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Masuk</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="edit_kwi.php">
                            <fieldset>
                                <?php
                                    include('config/conn.php');
                                    $id    = $_GET['id']; //menggunakan GET karena agar mengetahui id data yang akan diubah

                                    $queri = "SELECT * from kwitansi";
                                    $hasil = $konek->query($queri);
                                    if ($hasil === false) {
                                        trigger_error('Perintah SQL salah! ' . $queri . 'Error: ' . $konek->error, E_USER_ERROR);
                                    }else{
                                        while ($data = $hasil->fetch_array()){
                                ?>
                                <div class="form-group col-md-6">
                                    <input class="form-control" name="no_kwi" value="<?php echo $data['no_kwi']; ?>" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Penerima" name="penerima" value="<?php echo $data['penerima']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Pemberi" name="pemberi" value="<?php echo $data['pemberi']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Kegunaan" name="guna" value="<?php echo $data['guna']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Nominal" name="nominal" value="<?php echo $data['nominal']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="date" class="" placeholder="Tanggal" name="tgl_kwi" value="<?php echo $data['tgl_kwi']; ?>">
                                </div>
                                <?php }}?>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="_resource/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="_resource/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/global.js"></script>

</body>

</html>