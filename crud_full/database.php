<?php

class database{

    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $db = "toko_atk";
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function tampil_data(){
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

    public function input($id_barang, $kode_barang, $nama_barang, $jumlah, $harga, $nama_file){
        $stmt = $this->conn->prepare("INSERT INTO barang (id_barang, kode_barang, nama_barang, jumlah, harga, nama_file) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $id_barang, $kode_barang, $nama_barang, $jumlah, $harga, $nama_file);
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    public function hapus($id_barang){
        // Fetch the file name before deleting the record
        $stmt = $this->conn->prepare("SELECT nama_file FROM barang WHERE id_barang = ?");
        $stmt->bind_param("s", $id_barang);
        $stmt->execute();
        $stmt->bind_result($nama_file);
        $stmt->fetch();
        $stmt->close();
    
        // If a file name was found, attempt to delete the file
        if ($nama_file) {
            $file_path = 'file/' . $nama_file;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    
        // Proceed to delete the record from the database
        $stmt = $this->conn->prepare("DELETE FROM barang WHERE id_barang = ?");
        $stmt->bind_param("s", $id_barang);
        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        $stmt->close();
    }
    

    public function edit($id_barang){
        $stmt = $this->conn->prepare("SELECT * FROM barang WHERE id_barang = ?");
        $stmt->bind_param("s", $id_barang);
        $stmt->execute();
        $result = $stmt->get_result();
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        $stmt->close();
        return $hasil;
    }

    public function update($id_barang, $kode_barang, $nama_barang, $jumlah, $harga, $nama_file){
        $stmt = $this->conn->prepare("UPDATE barang SET kode_barang = ?, nama_barang = ?, jumlah = ?, harga = ?, nama_file = ? WHERE id_barang = ?");
        $stmt->bind_param("ssssss", $kode_barang, $nama_barang, $jumlah, $harga, $nama_file, $id_barang);
        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    }
}

?>
