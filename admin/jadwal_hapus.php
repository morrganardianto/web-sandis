<?php 
	$ambil = $koneksi->query("SELECT * FROM jadwal WHERE id_jadwal='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	$koneksi->query("DELETE FROM jadwal WHERE id_jadwal='$_GET[id]'");

	echo "<script>alert('jadwal sudah terhapus');</script>";
	echo "<script>location='index.php?halaman=jadwal';</script>";
 ?>