<?php
    namespace application;
    namespace App;
    class Mahasiswa extends User{
        public $nim;
        public $nama;
        public $tanggal_lahir;
        public $jenis_kelamin;
        const AKTIF = 1;
        const NON_AKTIF = 0;
        public static $status = self::AKTIF;
        public static $sks = 3;
        public static $bobot = 12;

        function __construct($nama, $nim, $tgl, $jk){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function tampilkanAngkatan()
        { 
            echo "Merupakan angkatan tahun 20".substr($this->nim , 5,-4)."<br>";
        }

        public function tampilkanUmur(){
            $tgl_lahir = date_create($this->tanggal_lahir);
            $umur = date_diff($tgl_lahir, date_create("today"))->y;
            // y = year / tahun
            // m = month / bulan
            // d = day / hari
            echo $umur;
        }

        public function tampilkanNama(){
            echo $this->nama;
        }

        public static function bergerak(){
            echo "agen solusi, bukan agen perubahan <br/>";
        
        }

        final public function tuntaskan(){
            self::bergerak();
            echo "memperbaiki menjadi lebih baik <br/>";
        }
        public static function hitungSks()
    {
        echo "jumlah SKS nya adalah ". "<b>" . self::$sks * self::$bobot . "<b>" . "<br/>";
    }
    }
?>