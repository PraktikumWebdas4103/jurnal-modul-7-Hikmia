	<form action="tampil.php" method="POST">
	<a href="form.php"><input type="submit" name="submit" value="Input Data"></a>
	<a href="cari.php"><input type="text" name="search"  placeholder="search"><input type="submit" name="cari" value="cari"></a>
	<a href="tampil.php"><input type="submit" name="tampil" value="tampil"></a>
	</form>

<?php 
include 'connect.php';
if(isset($_POST['cari'])){
	$cari = $_POST['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>nim</th>
        <th>nama</th>
        <th>jenis_kelamin</th>
        <th>prodi</th>
        <th>fakultas</th>
        <th>asal</th>
        <th>moto</th>
	</tr>
	<?php 
	if(isset($_POST['cari'])){
		$cari = $_POST['cari'];
		$data = mysqli_query("select * from data where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query("select * from data");		
	}
	while($data = mysqli_fetch_array($data)){
	?>
	}
	<tr>
		<td><?php echo $data['nama']; ?></td>
	</tr>
 ?>