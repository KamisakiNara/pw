<?php

class database
{
    private $host="localhost";
    private $user = "root";
    private  $pass = "";
    private $db = "toko_atk";
    protected $koneksi;
    public function __construct()
    {
        $this -> koneksi = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);
        if ($this -> koneksi == false) die("Tidak dapat tersambung dengan database".$this -> koneksi -> connect_error());
        return $this -> koneksi;
    }
}
?>