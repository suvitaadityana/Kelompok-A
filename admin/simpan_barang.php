<?php
//Panggilan file koneksi.php
include "../koneksi.php";

//input 
$kode = $_REQUEST['txt_kdbarang'];
$nama = $_REQUEST['txt_namabarang'];
$harga = $_REQUEST['txt_harga'];
$info = $_REQUEST['txt_info'];
//input untuk file gambar 
$gambar = $_FILES['file_gambar'] ['name'];
//printah upload gambar 
$pindah = move_uploaded_file($_FILES['file_gambar']['tmp_name'],'gambar/'.$gambar);

//Query simpan ke tbl_barang
$simpan = mysql_query("insert into tbl_barang values ('$kode','$nama','$harga','$info','$gambar')");

// kondisi apabila query simpan berhasil 
if ($simpan){
	echo " Data Berhasil disimpan ";
}else {
	echo " Data Gagal disimpan ";
}

?>