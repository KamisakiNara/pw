<?php

require_once ('koneksi.php');
require_once ('sql.php');

$obj = new crud;
if($_SERVER['REQUEST_METHOD']=='POST'):
	$id_barang  = $_POST['id_barang'];
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	if($obj->insertData($id_barang, $kode_barang, $nama_barang, $jumlah, $harga)):
		echo '<div class="alert alert-success">Data berhasil disimpan</div>';
	else:

		echo '<div class="alert alert-danger">Data gagal disimpan</div>';
	endif;
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Toko ATK</title>
	<link href="../../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="card shadow mb-4 mt-4">
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">Toko Alat Tulis Kantor</h6>
	            </div>
	        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		        <div class="card-body">
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label>id_barang :</label>
								<input type="text" class="form-control" name="id_barang"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>kode_barang :</label>
								<input type="text" class="form-control" name="kode_barang"/>
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<label>nama_barang :</label>
								<input type="text" class="form-control" name="nama_barang"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>jumlah :</label>
								<input type="text" class="form-control" name="jumlah"/>
							</div>
						</div><div class="col-md-4">
							<div class="form-group">
								<label>harga (Rp) :</label>
								<input type="text" class="form-control" name="harga"/>
							</div>
						</div>
						<div class="col-md-4">
							
								<button type="submit" class="mt-4 btn btn-md btn-success"> Simpan</button>
						
						</div>
					</div>
				</div>
			</form>
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>id_barang</th>
					<th>kode_barang</th>
					<th>nama_barang</th>
					<th>jumlah</th>
					<th>harga (Rp)</th>
					<th>Aksi</th>
				</tr>
				<?php 
					$data=$obj->tampilbarang();
					while($row=$data->fetch_array()){
				?>
				<tr>
					<td><?php echo $row['id_barang']; ?></td>
					<td><?php echo $row['kode_barang']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['jumlah']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
					<td>
						<?php echo "<a class='btn btn-sm btn-secondary' href='edit.php?id_barang=".$row['id_barang']."'>edit</a>"; ?>
						<?php echo "<a class='btn btn-sm btn-danger' href='delete.php?id_barang=".$row['id_barang']."'>delete</a>"; ?>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>

<script src="../jquery/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>