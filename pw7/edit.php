<?php 
include 'database.php';
$db = new database();
?>
 
<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>
 
<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
	<tr>
		<td>No</td>
		<td>
			<input type="text" name="id" value="<?php echo $d['id'] ?>">
		</td>
	</tr>
		<td>Nama</td>
		<td>
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>