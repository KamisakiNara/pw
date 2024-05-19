<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    if (isset($_POST['upload'])) {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $nama = $_FILES['file']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name']; 

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070) {
                $target_directory = 'file/';
                $target_file = $target_directory . basename($nama);

                if (move_uploaded_file($file_tmp, $target_file)) {
                    $db->input($_POST['id_barang'], $_POST['kode_barang'], $_POST['nama_barang'], $_POST['jumlah'], $_POST['harga'], $nama);
                } else {
                    echo 'GAGAL MEMINDAHKAN FILE';
                }
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    header("location:index.php");
} elseif ($aksi == "hapus") {     
    $db->hapus($_GET['id_barang']);
    header("location:index.php");
} elseif ($aksi == "update") {
    $db->update($_POST['id_barang'], $_POST['kode_barang'], $_POST['nama_barang'], $_POST['jumlah'], $_POST['harga'], $_POST['nama_file']);
    header("location:index.php");
}
?>
