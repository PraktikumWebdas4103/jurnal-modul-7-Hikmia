	<a href="form.php"><input type="submit" name="submit" value="Input Data"></a>
	<input type="text" name="search"  placeholder="search"><input type="submit" name="cari" value="cari">
	<a href="tampil.php"><input type="submit" name="tampil" value="tampil"></a>
<?php
include 'connect.php';
	if(isset($_POST['input'])){
	$nama = $_POST ['nama'];
	$nim = $_POST ['nim'];
	$jenis_kelamin = $_POST ['jenis_kelamin'];
	$fakultas = $_POST ['fakultas'];
	$prodi = $_POST ['prodi'];
	$asal = $_POST ['asal'];
	$moto = $_POST ['moto'];

	$sql = "INSERT INTO data (nama,nim,jenis_kelamin,fakultas,asal,moto,prodi) values ('$nama','$nim','$jenis_kelamin','$fakultas','$asal','$moto','$prodi')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
}
?>