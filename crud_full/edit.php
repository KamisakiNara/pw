<link rel="stylesheet" href="../fontawesome/css/all.min.css">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css">
<?php 
include 'database.php';
$db = new database();
?>
<div id="container">
<div class="card-header py-3">
	<h1 class="m-0 font-weight-bold text-primary">CRUD OOP PHP</h1>
	<h3 class="m-0 font-weight-bold text-primary">Data User</h3>
</div>
    
	<div class="card mb-4 mt-5">
    <form action="proses.php?aksi=update" method="post">
        <?php
        if(isset($_GET['id_barang'])) {
            foreach($db->edit($_GET['id_barang']) as $d){
        ?>
        <table class="table">
            <tr>
                <td>Id</td>
                <td><input type="text" name="id_barang" id="id-key" value="<?php echo $d['id_barang'] ?>" onkeyup="validateId()"> <span id="id-error"></span></td>
				<td></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang" id="kode-key" value="<?php echo $d['kode_barang'] ?>" onkeyup="validateKode()"> <span id="kode-error"></span></td>
				<td></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" id="nama-key" value="<?php echo $d['nama_barang'] ?>" onkeyup="validateNama()"> <span id="nama-error"></span></td>
				<td></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" id="jumlah-key" value="<?php echo $d['jumlah'] ?>" onkeyup="validateJml()"> <span id="jumlah-error"></span></td>
				<td></td>
            </tr>
            <tr>
                <td>Harga (Rp.)</td>
                <td><input type="text" name="harga" id="harga-key" value="<?php echo $d['harga'] ?>" onkeyup="validateHrg()"> <span id="harga-error"></span></td>
					<td></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" class="sim" type="submit" value="Simpan" title="klik disini" onclick="return validateForm()"></td>
				<td><span id="submit-error"></span></td>
            </tr>
        </table>
        <?php 
            } // End foreach
        } else {
            echo "ID tidak ditemukan.";
        }
        ?>
    </form>
    </div>
</div>
<script src="script.js"></script>
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>