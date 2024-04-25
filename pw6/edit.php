<?php

require_once ('koneksi.php');
require_once ('sql.php');

$obj = new crud;
if(isset($_GET['nis']) && !$obj->detailData($_GET['nis'])) {
    die("Error : nis tidak ada");
}
if($_SERVER['REQUEST_METHOD']=='POST'):
	$nis  = $_POST['nis'];
	$nama = $_POST['nama'];
	if($obj->updateData($nis, $nama, $obj->nis)):
		echo '<div class="alert alert-success">Data berhasil disimpan</div>';
	else:

		echo '<div class="alert alert-danger">Data berhasil disimpan</div>';
	endif;
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial PHP : CRUD OOP PHP</title>

	<link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="container">
		<div class="card shadow mb-4 mt-4">
	            <div class="card-header py-3">
	                <h6 class="m-0 font-weight-bold text-primary">Tutotrial PHP : CRUD OOP PHP</h6>
	            </div>
	        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
		        <div class="card-body">
					<div class="row">
						
						<div class="col-md-4">
							<div class="form-group">
								<label>NIS :</label>
								<input type="text" class="form-control" name="nis" value="<?php echo $obj->nis; ?>"/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>NAMA SISWA :</label>
								<input type="text" class="form-control" name="nama" value="<?php echo $obj->nama; ?>"/>
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

<script src="../assets/jquery/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>