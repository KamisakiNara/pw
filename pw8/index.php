<?php
include 'database.php';
$db = new database();
?>
<div id="container">
<h1>CRUD OOP PHP</h1>
<h3>Data User</h3>
 
<table border="1">
    <tr>
        <th>Id</th>
        <th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
        ?>
	<tr>
        <td><?php echo $x['id_barang']; ?></td>
		<td><?php echo $x['kode_barang']; ?></td>
		<td><?php echo $x['nama_barang']; ?></td>
		<td><?php echo $x['jumlah']; ?></td>
		<td><?php echo $x['harga']; ?></td>
		<td>
            <a class="edit" href="edit.php?id_barang=<?php echo $x['id_barang']; ?>&aksi=edit" title="klik disini">Edit</a>
			<a class="del" href="proses.php?id_barang=<?php echo $x['id_barang']; ?>&aksi=hapus" onclick="return confirm('Apakah kamu akan menghapus item ini?');" title="klik disini">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>
<br>
<a style="border: 1px solid black;padding :6;" class="edit" href="input.php" title="klik disini">Input Data</a>
</div>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../fontawesome/css/all.min.css">
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>
</div>