<?php
class hewan{
    public $nama;
    public $gerak;

    function set_nama($nama) {
        $this -> nama = $nama;
    }
    function get_nama(){
        return $this -> nama;
    }
    function set_gerak($gerak){
        $this -> gerak = $gerak;
    }
    function get_gerak(){
        return $this -> gerak;
    }
}

$burung = new hewan();
$harimau = new hewan();
$ikan = new hewan();
$monyet = new hewan();
$ular = new hewan();

$burung -> set_nama('Burung');
$harimau -> set_nama('Harimau');
$ikan -> set_nama('Ikan');
$monyet -> set_nama('Monyet');
$ular -> set_nama('Ular');

$burung -> set_gerak('Terbang');
$harimau -> set_gerak('Berlari');
$ikan -> set_gerak('Berenang');
$monyet -> set_gerak('Bergelantungan');
$ular -> set_gerak('Melata');

echo "Nama Hewan: " . $burung -> get_nama();
echo "<br>";
echo "Bergerak dengan : " . $burung -> get_gerak();
echo "<br>";
echo "<br>";
echo "Nama Hewan: ". $harimau -> get_nama();
echo "<br>";
echo "Bergerak dengan : " . $harimau -> get_gerak();
echo "<br>";
echo "<br>";
echo "Nama Hewan: ". $ikan -> get_nama();
echo "<br>";
echo "Bergerak dengan : " . $ikan -> get_gerak();
echo "<br>";
echo "<br>";
echo "Nama Hewan: ". $monyet -> get_nama();
echo "<br>";
echo "Bergerak dengan : " . $monyet -> get_gerak();
echo "<br>";
echo "<br>";
echo "Nama Hewan: ". $ular -> get_nama();
echo "<br>";
echo "Bergerak dengan : " . $ular -> get_gerak();
echo "<br>";
echo "<br>";

?>