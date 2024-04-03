<?php

class crud extends database

{
    public function tampilsiswa()
    {
        $sql = "SEELCt nis, nama, kelamin, jurusan FROM siswa ";
        $perintah = $this -> koneksi -> query($sql);
        If(!$perintah) die ("Error : ".$this -> koneksi -> error);
        return $perintah
    }

    public function detail(data)
    {}
}