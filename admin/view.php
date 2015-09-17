<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Suvita Aditiyana</title>

<link href="../datatables/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--Pemanggilan Plugin Javascript-->
<!--Plugin Javascrip 1-->
<Script type="text/javascript" language="javascript" src="../datatables/jquery-1.10.2.min.js"></script>
 

<!--Plugin Javascrip 2-->
<Script type="text/javascript" language="javascript" src="../datatables/jquery.dataTables.min.js"></script>

<!--Plugin Javascrip 3-->
<Script type="text/javascript" language="javascript" src="../datatables/dataTables.bootstrap.js"></script>

<!-- Pembuatan Id untuk tabel  dengan nama tampil-->
<script type="text/javascript">
	$(document).ready(function(){
		$('#tampil').dataTable();
		
	});
</script>
</head>

<body class="view_link">
<table width="100%" border="0" cellspacing="0" cellpadding="3">

  <tr>
    <td>Data Barang</td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="3" id="tampil" class="table table-bordered">
    <thead>
      <tr>
        <td width="19%">Kode Barang</td>
        <td width="19%">Nama Barang</td>
        <td width="9%">Harga</td>
        <td width="7%">Info</td>
        <td width="16%">Gambar</td>
        <td>Action</td>
        <td>&nbsp;</td>
      </tr>
      </thead>
      
      
      <tbody>
      <?php
	  include "../koneksi.php";
	  //Printah query menampilkan semua field barang
	  $query = mysql_query("SELECT * FROM tbl_barang");
	  //Printah untuk menampilkan data di baris
	  while ($data = mysql_fetch_array($query)){
	  ?>
      
      <tr>
      <thead>
        <td><?php echo $data['kode'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['harga'] ?></td>
        <td><?php echo $data['info'] ?></td>
        <td><img src="gambar/<?php echo $data['gambar'] ?>" width="140" height="155" /></td>
        <td width="10%"><a href="edit.php?kode=<?php echo $data['kode']?>" target="isi">Edit</a></td>
        <td width="10%"><a href="Hapus_barang.php?kode=<?php echo $data['kode']?>">Hapus</a></td>
      </tr>
      </thead>
      </
      <?php
	  
	  }
	  ?>
      </tbody>
    </table></td>
  </tr>
</table>
</body>
</html>