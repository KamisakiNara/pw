<?php
class fruit{
    //properties
    public $name;
    public $color;

    //methods
    function simpan($nama){
        $this -> name = $nama;
    }
    function ambil(){
        return $this -> name;
    }
    function set_color($warna){
        $this -> color = $warna;
    }
    function get_color(){
        return $this -> color;
    }
}

$apple = new fruit();
$banana = new fruit();

$apple -> simpan('Apel');
$apple -> set_color('Merah');
$banana -> simpan('Pisang');
$banana -> set_color('Kuning');

echo "Nama Buah : " . $apple -> ambil();
echo "<br>";
echo " Warna : " . $apple -> get_color();
echo "<br>";
echo "<br>";
echo "Nama Buah : " . $banana -> ambil();
echo "<br>";
echo " Warna : " . $banana -> get_color();

?>