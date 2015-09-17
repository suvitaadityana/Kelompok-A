<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include "../koneksi.php";
$kode =$_GET['kode'];

$sql = "select * from tbl_barang where kode='$kode'";
$rest = mysql_query($sql);
$data = mysql_fetch_array($rest);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td>Form input barang</td>
  </tr>
  <tr>
    <td><form action="Simpan_barang.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td>Kode barang</td>
          <td><input name="txt_kdbarang" type="text" id="txt_kdbarang" value="<?php echo $data ['kode'];?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td>Nama Barang</td>
          <td><input name="txt_namabarang" type="text" id="txt_namabarang" value="<?php echo $data['nama'];?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input name="txt_harga" type="text" id="txt_harga" value="<?php echo $data['harga'];?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td>Info</td>
          <td><textarea name="txt_info" cols="45" rows="5" readonly="readonly" id="txt_info"><?php echo $data['info'];?>
          </textarea></td>
        </tr>
        <tr>
          <td>Upload Gambar</td>
          <td><input type="file" name="file_gambar" id="file_gambar" /></td>
        </tr>
        <tr>
          <td><input type="submit" name="Btn_simpan" id="button" value="simpan" /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>