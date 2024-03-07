<?php
class pelajar {
  public $nama;
  public $kelas;

  function __construct($nama, $kelas) {
    echo "Objek dibuat \n";
    $this->nama = $nama;
    $this->kelas = $kelas;
    echo "<br>";
  }
  function __destruct() {
    echo "Objek $this->nama dihapus\n";
  }
  function tulisInformasi(){
    echo "{$this->nama} belajar di {$this->kelas}\n";
    echo "<br>";
  }
}

$raihan = new pelajar("Raihan", "Lab 4");
$raihan->tulisInformasi();
?>