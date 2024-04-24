<?php

class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "crud_oop";
    var $conn;

    function __construct(){
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function tampil_data(){
        $query = "SELECT * FROM user";
        $result = $this->conn->query($query);
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function input($id,$nama,$alamat,$usia){
        $query = "INSERT INTO user VALUES ('$id','$nama','$alamat','$usia')";
        if ($this->conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    function hapus($id){
        $query = "DELETE FROM user WHERE id='$id'";
        if ($this->conn->query($query) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }

    function edit($id){
        $query = "SELECT * FROM user WHERE id='$id'";
        $result = $this->conn->query($query);
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function update($id,$nama,$alamat,$usia){
        $query = "UPDATE user SET nama='$nama', alamat='$alamat', usia='$usia' WHERE id='$id'";
        if ($this->conn->query($query) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->conn->error;
        }
    }

}

?>
