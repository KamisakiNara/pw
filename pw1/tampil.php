<?php
if (isset($_REQUEST["submit"])){
    $nama=trim($_REQUEST["nama"]);
} else {
    $nama="";
}
if (isset($_REQUEST["submit"])){
    $umur=trim($_REQUEST["umur"]);
} else {
    $umur="";
}
if (isset($_REQUEST["submit"])){
    $alamat=trim($_REQUEST["alamat"]);
} else {
    $alamat="";
}
?>

<html>
    <head>
        <title>Tampil</title>
    </head>
    <body>
        <h1>Welcome User : <?php echo$nama ?></h1>
        <h2>Age : <?php echo$umur ?></h2>
        <h2>Address : <?php echo$alamat ?> </h2>
    </body>
</html>