<?php
//koneksi PHP dan MySql
$koneksi = mysql_connect("localhost","root","");

//koneksi PHP dan database 
$data = mysql_select_db("db_tugas1");

//koneksi jika koneksi berhasil
if ($koneksi and $data){
	echo "koneksi berhasil";
}else {
	echo "koneksi gagal";
}





?>