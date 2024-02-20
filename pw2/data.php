<?php
$nama = "";
$alamat = "";
$umur = 0;
if (isset($_REQUEST["submit"])){
    $nama=trim($_REQUEST["nama"]);
    $umur=trim($_REQUEST["umur"]);
    $alamat=trim($_REQUEST["alamat"]);
} else {
    $nama="";
    $umur="";
    $alamat="";
}

echo "Nama : " .$nama. "<br>" ;
echo "Umur : " .$umur. " tahun <br>" ;
echo "Alamat : " .$alamat. "<br><br>" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <form name="input" method="post" action="#" target="_self" enctype="multipart/form-data">
        <label>Masukkan nama anda : </label>
        <input type="text" name="nama"><br>
        <label>Masukkan umur anda : </label>
        <input type="number" name="umur"><br>
        <label>Masukkan alamat anda : </label>
        <input type="text" name="alamat"><br>
        <input type="submit" name="submit" value="kirim">
    </form>
    
</body>
</html>