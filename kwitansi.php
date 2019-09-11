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
                        <h3 class="panel-title">Masukkan Data</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="tambah_kwi.php">
                            <fieldset>
                                <div class="form-group col-md-6">
                                    <?php
                                        include('config/conn.php');

                                        $n = ''; //variabel penampung untuk nomor auto generate
                                        $get_maxno ="select max(id) as mxno from kwitansi";
                                        $result=mysqli_query($konek,$get_maxno);
                                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                        if(empty($row['mxno'])){
                                            $n = 1; //jika belum ada data dalam tabel database, maka n = 1
                                        }else{
                                            $n = ($row['mxno'])+1; //jika terdapat data, maka n adalah id terakhir+1
                                        }
                                    ?>
                                    <input class="form-control" name="no_kwi" value="<?php echo "KW-JWP2/".date("Y")."/0"."$n"; ?>" readonly> <!-- dibuat readonly agar tidak dapat diubah -->
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Penerima" name="penerima" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Pemberi" name="pemberi" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Kegunaan" name="guna" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" placeholder="Nominal" name="nominal" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="date" class="" placeholder="Tanggal" name="tgl_kwi" value="">
                                </div>
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