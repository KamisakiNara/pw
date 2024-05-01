<link rel="stylesheet" href="style.css">
<div id="container">
	<h1>CRUD OOP PHP</h1>
	<h3>Tambah Data User</h3>
	
	<form action="proses.php?aksi=tambah" method="post">
		
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id_barang" id="id-key" onkeyup="validateId()"></td>
				<td><span id="id-error">Masukkan nama anda</span></td>
			</tr>
			<tr>
				<td>Kode Barang</td>
				<td><input type="text" name="kode_barang" id="kode-key"></td>
				<td><span id="kode-error">Masukkan nama anda</span></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" id="nama-key"></td>
				<td><span id="nama-error">Masukkan nama anda</span></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" id="jumlah-key"></td>
				<td><span id="jumlah-error">Masukkan nama anda</span></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" id="harga-key"></td>
				<td><span id="harga-error">Masukkan nama anda</span></td>
			</tr>
			<tr>
				<td></td>
				<td><button id="sim" type="submit" title="klik disini">Simpan</button></td>
				<span id="submit-error"></span>
			</tr>
		</table>
	</form>
</div>
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>