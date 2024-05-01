<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['id_barang'],$_POST['kode_barang'],$_POST['nama_barang'],$_POST['jumlah'],$_POST['harga']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id_barang']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id_barang'],$_POST['kode_barang'],$_POST['nama_barang'],$_POST['jumlah'],$_POST['harga']);
 	header("location:index.php");
 }
?>