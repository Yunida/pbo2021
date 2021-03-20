<?php
    require_once("User.php");

    class Pegawai extends User
    {
       protected $nip;
       protected $nama;
       protected $no_hp;
       protected $gaji_pokok;

        function __construct($nip, $nama, $hp, $gaji){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->no_hp = $hp;
            $this->gaji_pokok = $gaji;
        }

       protected function tampilkanGaji(){
            echo "Jumlah gaji : $this->gaji_pokok";
        }
    }
?>