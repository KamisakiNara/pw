<?php

require_once ('koneksi.php');
require_once ('sql.php');

$obj = new crud;
if(isset($_GET['id_barang']) && !$obj->detailData($_GET['id_barang'])) {
    die("Error : id_barang tidak ada");
}
if($_SERVER['REQUEST_METHOD']=='POST'):

	if($obj->deleteData($obj->id_barang)):
		echo '<div class="alert alert-success">Data berhasil dihapus</div>';
	else:
		echo '<div class="alert alert-danger">Data berhasil disimpan</div>';
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
					<button type="submit" class="mt-4 btn btn-md btn-primary">Delete</button>
                    <button type="submit" class="mt-4 btn btn-md btn-primary"><a href="index.php">Kembali</a></button>			
				</div>
			</form>
	
		</div>
	</div>

<script src="../jquery/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>