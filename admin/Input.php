<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Suvita Aditiyana</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="Assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="input_link">
<table width="63%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td><i class="fa fa-pagelines fa-2x"></i> FORM INPUT BARANG <i class="fa fa-pagelines fa-2x"></i></td>
  </tr>
  <tr>
    <td><form action="simpan_barang.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="91%" height="245" border="1" cellpadding="3" cellspacing="0">
        <tr>
          <td>Kode Barang</td>
          <td><input type="text" name="txt_kdbarang" id="txt_kdbarang" /></td>
        </tr>
        <tr>
          <td>Nama Barang</td>
          <td><input type="text" name="txt_namabarang" id="txt_namabarang" /></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="txt_harga" id="txt_harga" /></td>
        </tr>
        <tr>
          <td>Info</td>
          <td><textarea name="txt_info" id="txt_info" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>Upload Gambar</td>
          <td><input type="file" accept="image/*"/> </td>
        </tr>
        <tr>
          <td><input type="submit" name="Btn_simpan" id="Btn_simpan" value="simpan" /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>