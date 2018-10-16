<?php
include 'connect.php';

if (!empty($nim)&& $nim != "") {
	$hapus = "DELETE from data where nim = '$nim'";
	$sql = mysqli_query ($hapus);

	if ($sql) {
		echo "Data Berhasil Dihapus";
	}
	
 }else{
 	echo "Data Mahsiswa Gagal Dihapus";
 }
?>