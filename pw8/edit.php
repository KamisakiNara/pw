<?php

require_once ('koneksi.php');
require_once ('sql.php');

$obj = new crud;
if(isset($_GET['id_barang']) && !$obj->detailData($_GET['id_barang'])) {
    die("Error : id_barang tidak ada");
}
if($_SERVER['REQUEST_METHOD']=='POST'):
	$id_barang  = $_POST['id_barang'];
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	if($obj->updateData($id_barang, $kode_barang, $nama_barang, $jumlah, $harga, $obj->id_barang)):
		echo '<div class="alert alert-success">Data berhasil disimpan</div>';
	else :
        echo '<div class="alert alert-danger">Data gagal disimpan</div>';
	endif;
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Toko ATK</title>
	<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="card shadow mb-4 mt-4">
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">Toko Alat Tulis Kantor</h6>
	            </div>
	        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
		        <div class="card-body">
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label>id_barang :</label>
								<input type="text" class="form-control" name="id_barang" value="<?php echo $obj->id_barang; ?>"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>kode_barang :</label>
								<input type="text" class="form-control" name="kode_barang" value="<?php echo $obj->kode_barang; ?>"/>
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<label>nama_barang :</label>
								<input type="text" class="form-control" name="nama_barang" value="<?php echo $obj->nama_barang; ?>"/>
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<label>jumlah :</label>
								<input type="text" class="form-control" name="jumlah" value="<?php echo $obj->jumlah; ?>"/>
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<label>harga :</label>
								<input type="text" class="form-control" name="harga" value="<?php echo $obj->harga; ?>"/>
							</div>
						</div>
						<div class="col-md-4">
							
								<button type="submit" class="mt-4 btn btn-md btn-primary">Simpan</button>
                                <button type="submit" class="mt-4 btn btn-md btn-primary"><a href="index.php">Kembali</a></button>						
						</div>
					</div>
				</div>
			</form>
	
		</div>
	</div>

<script src="../jquery/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>