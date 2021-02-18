<?php
    class Mahasiswa {
        public $nim  ; 
        public $nama ;
        public $tanggal_lahir ;
        public $jenis_kelamin ; 
        
        public function tampilkanAngkatan() {
            echo "$this->nama merupakan seorang $this->jenis_kelamin yang menjadi mahasiswi di jurusan Sistem Informasi 2019 dengan NIM $this->nim " ;
        }
        public function tampilkanUmur() {
            echo " yang lahir pada tanggal $this->tanggal_lahir dan pada saat ini berumur 20 tahun <br>" ;
        }
        }

        
    

?>