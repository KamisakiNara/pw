<?php 
include 'database.php';
$db = new database();

// Memeriksa apakah aksi sudah diatur sebelum mencoba mengaksesnya
if(isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
        // Memeriksa apakah data yang diperlukan telah dikirimkan
        if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['usia'])){
            $db->input($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
            header("location:index.php");
        } else {
            echo "Data yang diperlukan tidak lengkap";
        }
    } else if($aksi == "hapus"){ 	
        if(isset($_GET['id'])){
            $db->hapus($_GET['id']);
            header("location:index.php");
        } else {
            echo "ID yang diperlukan tidak ditemukan";
        }
    } else if($aksi == "update"){
        // Memeriksa apakah data yang diperlukan telah dikirimkan
        if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['usia'])){
            $db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
            header("location:index.php");
        } else {
            echo "Data yang diperlukan tidak lengkap";
        }
    } else {
        echo "Aksi tidak valid";
    }
} else {
    echo "Aksi tidak diberikan";
}
?>
