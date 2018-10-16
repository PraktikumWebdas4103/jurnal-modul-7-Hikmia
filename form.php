<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="form.php"><input type="submit" name="submit" value="Input Data"></a>
	<input type="text" name="search"  placeholder="search"><input type="submit" name="cari" value="cari">
	<a href="tampil.php"><input type="submit" name="tampil" value="tampil"></a>
	<h2>FORM REGISTRASI</h2>
	<hr>
<form action=" proses.php " method="POST">
		<table border="2">
		<tr>
			<td> Nama </td>
			<td>:<input type="text" name="nama"></td>
		</tr>
		<tr>
			<td> NIM </td>
			<td>:<input type="text" name="nim"></td>
		</tr>
		<tr>
			<td> Jenis Kelamin </td>
			<td>:<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</input>
			<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</input></td>
		</tr>
		<tr>
		<td> Fakultas 
			<td>:<select name="fakultas">
			<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan </option>
			<option value="Fakultas Industri Kreatif"> Fakultas Industri Kreatif </option>
			<option value="Fakultas Komunikasi dan Bisnis ">Fakultas Komunikasi dan Bisnis</option>
			<option value="Fakultas Ekonomi Bisnis "> Fakultas Ekonomi Bisnis</option>
			<option value="Fakultas Rekayasa Industri"> Fakultas Rekayasa Industri </option>
			<option value="Fakultas Teknik Elektro"> Fakultas Teknik Elektro </option>
			</td></select>
		</tr>
		<tr>
			<td> Program Studi
			<td>:<select name="prodi">
			<option value="Manajemen Informatika"> Manajemen Informatika</option>
			<option value="Teknik Fisika">Teknik Fisika</option>
			<option value=" Manajemen Pemasaran Bisnis ">Manajemen Pemasaran Bisnis </option>
			<option value=" Fashion Design ">Fashion Design</option>
			<option value=" Teknik Telekomunikasi ">Teknik Telekomunikasi</option>
			<option value=" Teknik Industri ">Teknik Industri </option>
			 </td></select>
		</tr>
		<tr>
			<td> Asal </td>
			<td>:<input type="text" name="asal"></td>
		</tr>
		<tr>
			<td> Moto </td>
			<td>:<textarea cols="28" rows="15" name="moto"></textarea></td>
		</tr>
		<tr>
			<td>
			<input type="submit" name="input" value="input">
			</td>
		</tr>
		</table>
	</form>
</body>
</html>
