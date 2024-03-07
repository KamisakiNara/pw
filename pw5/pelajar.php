<?php
class pelajar {
  public $nama;
  public $kelas;

  function __construct() {
    echo "Objek dibuat \n";
    echo "<br>";
  }
  function __destruct() {
    echo "Objek $this->nama dihapus\n";
  }
  function tulisInformasi(){
    echo "{$this->nama} belajar di {$this->kelas}\n";
    echo "<br>";
    echo "<br>";
  }
}

$raihan = new pelajar();
$raihan -> nama ="Raihan";
$raihan -> kelas ="Lab 4";
$raihan->tulisInformasi();
?>