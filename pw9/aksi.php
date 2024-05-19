<!DOCTYPE html>
<html>
<head>
    <title>Membuat Upload File Dengan PHP Dan MySQL | www.malasngoding.com</title>
</head>
<body>
<h1>Membuat Upload File Dengan PHP Dan MySQL <br/> www.malasngoding.com</h1>
<?php 
include 'koneksi.php';

if(isset($_POST['upload'])){ // Change to isset to ensure the form is submitted properly
    $ekstensi_diperbolehkan = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name']; 

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){            
            move_uploaded_file($file_tmp, 'file/'.$nama);
            $query = mysqli_query($koneksi, "INSERT INTO upload (nama_file) VALUES ('$nama')");
            if($query){
                echo 'FILE BERHASIL DI UPLOAD';
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
?>

<br/>
<br/>
<a href="index.php">Upload Lagi</a>
<br/>
<br/>

<table>
    <?php 
    $data = mysqli_query($koneksi, "SELECT * FROM upload");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td>
            <img src="<?php echo "file/".$d['nama_file']; ?> " width="100" height="100">
        </td>        
    </tr>
    <?php } ?>
</table>
</body>
</html>
