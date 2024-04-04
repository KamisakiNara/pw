<?php

class crud extends database
{
    public $nis;
    public $nama;
    public $kelamin;
    public $jurusan;
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

    public function tampilsiswa()
    {
        $sql = "SELECT nis, nama FROM siswa";
        $perintah = $this->query($sql);
        return $perintah;
    }

    public function insertData($nis, $nama)
    {
        $sql = "INSERT INTO siswa (nis, nama) VALUES (?,?)";
        if ($stmt = $this->prepare($sql)) {
            $stmt->bind_param("ss", $param_nis, $param_nama);
            $param_nis = $nis;
            $param_nama = $nama;
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
        $sql = "SELECT nis, nama FROM siswa WHERE nis=?";
        if ($stmt = $this->koneksi->prepare($sql)) {
            $stmt->bind_param("i", $param_data);
            $param_data = $data;
            if ($stmt->execute()) {
                $stmt->store_result();
                $stmt->bind_result($this->nis, $this->nama);
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

    public function updateData($nis, $nama, $data)
    {
        $sql = "UPDATE siswa SET nis=?, nama=? WHERE nis=?";
        if ($stmt = $this->prepare($sql)) {
            $stmt->bind_param("ssi", $param_nis, $param_nama, $param_data);
            $param_nis = $nis;
            $param_nama = $nama;
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
        $sql = "DELETE FROM siswa WHERE nis=?";
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
