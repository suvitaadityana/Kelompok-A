<?php
//koneksi PHP dan MySql
$koneksi = mysqli_connect("mysql.idhostinger.com","u567203033_root","suvita");

//koneksi PHP dan database 
$data = mysqli_select_db("u567203033_tugas");

//koneksi jika koneksi berhasil
if ($koneksi and $data){
	echo "koneksi berhasil";
}else {
	echo "koneksi gagal";
}









?>