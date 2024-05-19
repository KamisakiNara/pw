<?php

class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "toko_atk";
    var $conn;

    function __construct(){
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function tampil_data(){
        $query = "SELECT * FROM barang";
        $result = $this->conn->query($query);
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function input($id_barang,$kode_barang,$nama_barang,$jumlah,$harga){
        $query = "INSERT INTO barang VALUES ('$id_barang','$kode_barang','$nama_barang','$jumlah','$harga')";
        if ($this->conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    function hapus($id_barang){
        $query = "DELETE FROM barang WHERE id_barang='$id_barang'";
        if ($this->conn->query($query) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }

    function edit($id_barang){
        $query = "SELECT * FROM barang WHERE id_barang='$id_barang'";
        $result = $this->conn->query($query);
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function update($id_barang,$kode_barang,$nama_barang,$jumlah,$harga){
        $query = "UPDATE barang SET id_barang='$id_barang', kode_barang='$kode_barang', nama_barang='$nama_barang', jumlah='$jumlah', harga='$harga' WHERE id_barang='$id_barang'";
        if ($this->conn->query($query) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->conn->error;
        }
    }

}

?>