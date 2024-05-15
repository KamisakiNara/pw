<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../fontawesome/css/all.min.css">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<?php
include 'database.php';
$db = new database();
?>
<div id="container">
<div class="card-header py-3">
	<h1 class="m-0 font-weight-bold text-primary">CRUD OOP PHP</h1>
	<h3 class="m-0 font-weight-bold text-primary">Data User</h3>
</div>
 
<div class="card shadow mb-4 mt-5">
	<table class="table">
		<tr>
			<th class="table-primary" scope="col">Id</th>
			<th class="table-primary" scope="col">Kode Barang</th>
			<th class="table-primary" scope="col">Nama Barang</th>
			<th class="table-primary" scope="col">Jumlah</th>
			<th class="table-primary" scope="col">Harga</th>
			<th class="table-primary" scope="col">Opsi</th>
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
				<a class="edit btn btn-warning" href="edit.php?id_barang=<?php echo $x['id_barang']; ?>&aksi=edit" title="klik disini">Edit</a>
				<a class="del btn btn-danger" href="proses.php?id_barang=<?php echo $x['id_barang']; ?>&aksi=hapus" onclick="return confirm('Apakah kamu akan menghapus item ini?');" title="klik disini">Hapus</a>			
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
</div>
<br>
<a class="btn btn-success" style="border: 1px solid black;padding :6;" class="edit" href="input.php" title="klik disini">Input Data</a>
</div>
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>
</div>