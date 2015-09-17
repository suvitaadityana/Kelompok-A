<?php
include "../koneksi.php";
$kode = $_REQUEST['kode'];echo $kode;
$hapus = mysql_query("delete from tbl_barang where kode ='$kode'");
if($hapus)
{
	echo "Data Berhasil Dihapus";
}
else{
	echo "Data Gagal Dihapus";
}
?>