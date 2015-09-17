<?php
//Panggilan file koneksi.php
include "../koneksi.php";

//input 
$Kode = $_REQUEST['txt_kdbarang'];
$nama = $_REQUEST['txt_namabarang'];
$harga = $_REQUEST['txt_harga'];
$info = $_REQUEST['txt_info'];
//input untuk file gambar 
$gambar = $_FILES['file_gambar'] ['name'];
//printah upload gambar 
$pindah = move_uploaded_file($_FILES['file_gambar']['tmp_name'],'gambar/'.$gambar);

//Query simpan ke tbl_barang
$simpan = mysql_query("update tbl_barang set nama=' $nama', harga='$harga', info='$info ', gambar='$gambar'where kode='$kode';");

// kondisi apabila querysimpan berhasil 
if ($simpan){
	echo " Data Berhasil diubah ";
}else {
	echo " Data Gagal diubah ";
}

?>