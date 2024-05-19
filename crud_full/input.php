<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="../fontawesome/css/all.min.css">
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script>
			function previewImage() {
    var file = document.querySelector('input[name=file]').files[0];
    var preview = document.getElementById('preview');
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}

		</script>
</head>
<body>
<div id="container">
<div class="card-header py-3">
	<h1 class="m-0 font-weight-bold text-primary">CRUD OOP PHP</h1>
	<h3 class="m-0 font-weight-bold text-primary">Data User</h3>
</div>
	
	<div class="card mb-4 mt-5">
	<form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <td>Id</td>
            <td>
                <input type="text" name="id_barang" id="id-key" onkeyup="validateId()"> 
                <span id="id-error">Masukkan Id Barang</span>
            </td>
        </tr>
        <tr>
            <td>Kode Barang</td>
            <td>
                <input type="text" name="kode_barang" id="kode-key" onkeyup="validateKode()"> 
                <span id="kode-error">Masukkan Kode Barang</span>
            </td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>
                <input type="text" name="nama_barang" id="nama-key" onkeyup="validateNama()"> 
                <span id="nama-error">Masukkan Nama Barang</span>
            </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>
                <input type="text" name="jumlah" id="jumlah-key" onkeyup="validateJml()"> 
                <span id="jumlah-error">Masukkan Jumlah Barang</span>
            </td>
        </tr>
        <tr>
            <td>Harga (Rp.)</td>
            <td>
                <input type="text" name="harga" id="harga-key" onkeyup="validateHrg()"> 
                <span id="harga-error">Masukkan Harga Barang</span>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>
                <input type="file" name="file" onchange="previewImage()">
                <img id="preview" src="" alt="Image preview" style="max-width: 200px;"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input class="btn btn-success" id="sim" type="submit" name="upload" value="Kirim" title="klik disini" onclick="return validateForm()">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>

</div>
</div>

<div style="background:#f0f0f0;position:fixed;bottom:0;width:100%;
   text-align:center;color:#464646; font-weight: bold;"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>
<script src="script.js"></script>
</body>
</html>