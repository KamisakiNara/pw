<?php

require_once('koneksi.php');
class crud extends database
{
    public $id_barang;
    public $kode_barang;
    public $nama_barang;
    public $jumlah;
    public $harga;
    public function prepare($data)
    {
        $perintah = $this->koneksi->prepare($data);
        if (!$perintah) {
            die("Terjadi kesalahan pada prepare statement" . $this->koneksi->error);
        }
        return $perintah;
    }

    public function query($data)
    {
        $perintah = $this->koneksi->query($data);
        if (!$perintah) {
            die("Terjadi kesalahan sql" . $this->koneksi->error);
        }
        return $perintah;
    }

    public function tampilbarang()
    {
        $sql = "SELECT id_barang, kode_barang, nama_barang, jumlah, harga FROM barang";
        $perintah = $this->query($sql);
        return $perintah;
    }

    public function insertData($id_barang, $kode_barang, $nama_barang, $jumlah, $harga)
    {
        $sql = "INSERT INTO barang (id_barang, kode_barang, nama_barang, jumlah, harga ) VALUES (?,?,?,?,?)";
        if ($stmt = $this->prepare($sql)) {
            $stmt->bind_param("issid", $param_id_barang, $param_kode_barang, $param_nama_barang, $param_jumlah, $param_harga);
            $param_id_barang = $id_barang;
            $param_kode_barang = $kode_barang;
            $param_nama_barang = $nama_barang;
            $param_jumlah = $jumlah;
            $param_harga = $harga;
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
        }
    }

    public function detailData($data)
    {
        $sql = "SELECT id_barang, kode_barang, nama_barang, jumlah, harga FROM barang WHERE id_barang=?";
        if ($stmt = $this->koneksi->prepare($sql)) {
            $stmt->bind_param("i", $param_data);
            $param_data = $data;
            if ($stmt->execute()) {
                $stmt->store_result();
                $stmt->bind_result($this->id_barang,$this->kode_barang, $this->nama_barang, $this->jumlah, $this->harga);
                $stmt->fetch();
                if ($stmt->num_rows == 1) {
                    return true;
                } else {
                    return false;
                }
            }
            $stmt->close();
        }
    }

    public function updateData($id_barang, $kode_barang, $nama_barang, $jumlah, $harga, $data)
    {
        $sql = "UPDATE barang SET id_barang=?, kode_barang=?, nama_barang=?, jumlah=?, harga=? WHERE id_barang=?";
        if ($stmt = $this->prepare($sql)) {
            $stmt->bind_param("issidi", $param_id_barang, $param_kode_barang, $param_nama_barang, $param_jumlah, $param_harga, $param_data);
            $param_id_barang = $id_barang;
            $param_kode_barang = $kode_barang;
            $param_nama_barang = $nama_barang;
            $param_jumlah = $jumlah;
            $param_harga = $harga;
            $param_data = $data;
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
        }
    }

    public function deleteData($data)
    {
        $sql = "DELETE FROM barang WHERE id_barang=?";
        if ($stmt = $this->prepare($sql)) {
            $stmt->bind_param("i", $param_data);
            $param_data = $data;
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            $stmt->close();
        }
    }
}
 