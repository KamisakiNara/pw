<?php
include 'database.php';
$db = new database();
?>
<div id="container">
<h1>CRUD OOP PHP</h1>
<h3>Data User</h3>
 
<table border="1">
    <tr>
        <th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
        ?>
	<tr>
        <td><?php echo $x['id']; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['usia']; ?></td>
		<td>
            <a class="edit" href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit" title="klik disini">Edit</a>
			<a class="del" href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus" onclick="return confirm('Are you sure you want to delete this item?');" title="klik disini">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>
<br>
<a class="edit" href="input.php" title="klik disini"><span style="border: 1px solid black;padding :6;">Input Data</span></a>
</div>
<link rel="stylesheet" href="style.css">
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>
</div>