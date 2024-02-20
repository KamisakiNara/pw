<?php
$nama = "";
$alamat = "";
$umur = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nama   = anti_inject($_POST["nama"]);
    $alamat = anti_inject($_POST["alamat"]);
    $umur   = anti_inject($_POST["umur"]);
}

function anti_inject($data){
    $data = trim($data); //menghapus spasi kosong di kanan kiri data
    $data = stripslashes($data); //menghilangkan karakter /\
    $data = htmlspecialchars($data); //menghilangkan karakter khusus
    $data = preg_replace("/[^ a-zA-Z0-9]/", "", $data);

    return $data;
}

echo "Nama : " .$nama. "<br>" ;
echo "Alamat : " .$alamat. "<br>" ;
echo "Umur : " .$umur. " tahun" ;
?>