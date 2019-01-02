<?php
//buka koneksi ke engine MySQL
	$Open = mysqli_connect("koprasiwanitausahamandiri.com","u6018530_root","admin123","u6018530_koperasi_new");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
//koneksi ke database
	// $Koneksi = mysqli_select_db("koperasi_new");
	// 	if (!$Koneksi){
	// 	die ("Koneksi ke Database Gagal !");
	// 	}
?>