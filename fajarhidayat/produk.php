<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="datatables/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

<!--Pemanggilan Plugin Javascript-->
<!--Plugin Javascrip 1-->
<Script type="text/javascript" language="javascript" src="datatables/jquery-1.10.2.min.js"></script>

<!--Plugin Javascrip 2-->
<Script type="text/javascript" language="javascript" src="datatables/jquery.dataTables.min.js"></script>

<!--Plugin Javascrip 3-->
<Script type="text/javascript" language="javascript" src="datatables/dataTables.bootstrap.js"></script>

<!-- Pembuatan Id untuk tabel  dengan nama tampil-->
<script type="text/javascript">
	$(document).ready(function(){
		$('#tampil').dataTable();
		
	});
</script>
</head>

<body>
<p>Galery Product&gt;&gt;</p>
<table width="100%" border="1" cellspacing="0" cellpadding="3" id="tampil" class="table table-bordered">
 
 <thead>
 <tr>
    <td width="20%">Gambar</td>
    <td width="20%">Nama</td>
    <td width="18%">Harga</td>
    <td width="28%">Info/Spesfikasi</td>
    <td width="14%">Order</td>
  </tr>
</thead>
  
  <tbody>
  <?php
  //Panggil Koneksi
  include "koneksi.php";
  //Buat Query
  $query = mysql_query ("select * from tbl_barang");
  //Perulangan 
  while ($data = mysql_fetch_array($query)){
  ?>
  <tr>
    <td><img src="admin/gambar/<?php echo $data['gambar']?>" width="100%" height="133" /></td>
    <td><?php echo $data['kode'] ?></td>
    <td><?php echo $data['nama'] ?></td>
    <td><?php echo $data['harga'] ?></td>
    <td><?php echo $data['info'] ?></td>
    <td>Order</td>
  </tr>
 <?php 
  }
 ?>
 </tbody>
</table>
<p>&nbsp;</p>
<form action="laporan/pdf.php" method="post" name="form1" target="_blank" id="form1">
  <input type="submit" name="button" id="button" value="Cetak" />
</form>
<p>&nbsp;</p>
</body>
</html>