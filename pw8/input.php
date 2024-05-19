<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../fontawesome/css/all.min.css">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<div id="container">
<div class="card-header py-3">
	<h1 class="m-0 font-weight-bold text-primary">CRUD OOP PHP</h1>
	<h3 class="m-0 font-weight-bold text-primary">Data User</h3>
</div>
	
	<div class="card mb-4 mt-5">
	<form action="proses.php?aksi=tambah" method="post">
		<table class="table">
				<tr>
					<td>Id</td>
					<td><input type="text" name="id_barang" id="id-key" onkeyup="validateId()"></td>
					<td><span  id="id-error">Masukkan Id Barang</span></td>
				</tr>
				<tr>
					<td>Kode Barang</td>
					<td><input type="text" name="kode_barang" id="kode-key" onkeyup="validateKode()"></td>
					<td><span id="kode-error">Masukkan Kode Barang</span></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="nama_barang" id="nama-key" onkeyup="validateNama()"></td>
					<td><span id="nama-error">Masukkan Nama Barang</span></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah" id="jumlah-key" onkeyup="validateJml()"></td>
					<td><span id="jumlah-error">Masukkan Jumlah Barang</span></td>
				</tr>
				<tr>
					<td>Harga (Rp.)</td>
					<td><input type="text" name="harga" id="harga-key" onkeyup="validateHrg()"></td>
					<td><span id="harga-error">Masukkan Harga Barang</span></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-success" id="sim" type="submit" title="klik disini" onclick="return validateForm()">Simpan</button></td>
					<td><span id="submit-error"></span></td>
				</tr>
		</table>
	</form>
</div>
</div>

<script src="script.js"></script>
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>