<link rel="stylesheet" href="style.css">
<?php 
include 'database.php';
$db = new database();
?>
<div id="container">
    <h1>CRUD OOP PHP</h1>
    <h3>Edit Data User</h3>
    
    <form action="proses.php?aksi=update" method="post">
        <?php
        if(isset($_GET['id_barang'])) {
            foreach($db->edit($_GET['id_barang']) as $d){
        ?>
        <table>
            <tr>
                <td>Id</td>
                <td>
                    <input type="text" name="id_barang" value="<?php echo $d['id_barang'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td>
                    <input type="text" name="kode_barang" value="<?php echo $d['kode_barang'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama_barang" value="<?php echo $d['nama_barang'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $d['jumlah'] ?>"></td>
            </tr>
            <tr>
                <td>Harga (Rp)</td>
                <td><input type="text" name="harga" value="<?php echo $d['harga'] ?>"></td>
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
<div id="footer"><p>Copyright &copy; 2024 - Muhammad Raihan Syahfitrah - XI Rpl 1</p></div>
