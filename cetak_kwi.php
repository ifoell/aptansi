<html>
  <body onLoad="window.print();"> <!-- berfungsi agar ketika pertama dibuka, langsung memunculkan dialog print -->
   <?php
   include 'config/conn.php';
   ?>

  <style type="text/css">
    body {
    	font-size:12px;
    	font-family:Arial, Helvetica, sans-serif;

    }
    .style1{
    	font-size:12px;
    	font-family:Arial, Helvetica, sans-serif;	
    }
  </style>
  <br>
  <?php
    include ('config/conn.php');
    include ('config/fungsi.php');
    $id= $_GET['id'];
    $queri = "SELECT * from kwitansi WHERE id = $id";
    $hasil = $konek->query($queri);
    if ($hasil === false) {
      trigger_error('Perintah SQL salah! ' . $queri . 'Error: ' . $konek->error, E_USER_ERROR);
    }else{
      while ($data = $hasil->fetch_array()){ ?>
  <table width="1200px">
    <tbody>
      <tr>
        <td colspan="3">UJK JWP BPPTIK CIKARANG</td>
      </tr>
      <tr>
        <td colspan="3">Jl. R. Dewi Sartika 04/03 Sumber, Kab. Cirebon</td>
      </tr>
      <tr>
        <td colspan="3">+628121849152</td>
      </tr>
      <tr>
        <td colspan="4" align="right"><u><?php echo $data['no_kwi']; ?></u></td>
      </tr>
      <tr>
        <td width="150px">Nama</td>
        <td width="5px">:</td>
        <td><b><u><?php echo $data['penerima']; ?></u></b></td>
      </tr>
      <tr>
        <td width="150px">Uang Sejumlah</td>
        <td width="5px">:</td>
        <td><b><u><?php echo ucwords(Terbilang($data['nominal']));?> Rupiah</u></b></td>
        <!-- disini menggunakan fungsi terbilang dari file fungsi.php -->
      </tr>
      <tr>
        <td width="150px">Untuk Pembayaran</td>
        <td width="5px">:</td>
        <td><b><u><?php echo $data['guna']; ?></u></b></td>
      </tr>
      <tr><td height="30px"></td></tr>
      <tr>
        <td colspan="3">Nominal :</td>
        <td align="right">Cikarang, <?php echo $data['tgl_kwi']; ?></td>
      </tr>
      <tr>
        <td height="100px" style="border: 1px solid black;" width="200px"><h1>Rp. <?php echo $data['nominal']; ?></h1></td>
      </tr>
      <tr>
        <td colspan="4" align="right"><?php echo $data['pemberi']; ?></td>
      </tr>
      <?php }}?>
    </tbody>
  </table>

</body>
</html>