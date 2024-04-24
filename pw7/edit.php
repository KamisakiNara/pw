<?php 
include 'database.php';
$db = new database();
?>
<div id="container">
    <h1>CRUD OOP PHP</h1>
    <h3>Edit Data User</h3>
    
    <form action="proses.php?aksi=update" method="post">
        <?php
        if(isset($_GET['id'])) {
            foreach($db->edit($_GET['id']) as $d){
        ?>
        <table>
            <tr>
                <td>No</td>
                <td>
                    <input type="text" name="id" value="<?php echo $d['id'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="sim" type="submit" value="Simpan" title="klik disini"></td>
            </tr>
        </table>
        <?php 
            } // End foreach
        } else {
            echo "ID tidak ditemukan.";
        }
        ?>
    </form>
</div>
<link rel="stylesheet" href="style.css">
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>
