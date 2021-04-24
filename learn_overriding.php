<?php
    class Pegawai
    {
        public $nama;
        public function sapa()
        {
            echo "Halo ". $this->nama. "posisi anda saat ini adalah player dengan role mage/support di Omar Angel \n" ;
        }
        public function masuk()
        {
            echo "Anda bergabung di Omar Angel pada tanggal  " . date("d-m-y"). "\n" ;
        }
    }
    class KetuaJurusan extends Pegawai
    {
        public function sapa()
        {
            echo "Hei ". $this->nama . "anggota dari Omar Angel \n" ;
        }
        public function parentSapa()
        {
            return parent::sapa();
        }
    }
$yunida = new KetuaJurusan();
$yunida->nama = 'Yunida ';
$yunida->sapa();
$yunida->parentSapa();
$yunida->masuk();

?>