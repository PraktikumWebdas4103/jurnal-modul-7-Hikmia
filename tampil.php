    <a href="form.php"><input type="submit" name="submit" value="Input Data"></a>
    <input type="text" name="search"  placeholder="search"><input type="submit" name="cari" value="cari">
    <a href="tampil.php"><input type="submit" name="tampil" value="tampil"></a>
<?php
include "connect.php";
$query = mysqli_query($con,"SELECT * FROM data ORDER BY nim DESC");
?>
<form action="form.php" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>nim</th>
            <th>nama</th>
            <th>jenis_kelamin</th>
            <th>prodi</th>
            <th>fakultas</th>
            <th>asal</th>
            <th>moto</th>
            <th>aksi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["nama"];?></td>
             <td><?php echo $data["jenis_kelamin"];?></td>
            <td><?php echo $data["prodi"];?></td>
             <td><?php echo $data["fakultas"];?></td>
            <td><?php echo $data["asal"];?></td>
            <td><?php echo $data["moto"];?></td>
            <td>
                <a href="hapus.php">Delete</a> |
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>