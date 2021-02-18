<?php
 
include('Mahasiswa.php');

$mahasiswa_yuni = new Mahasiswa();
$mahasiswa_regita = new Mahasiswa();
$mahasiswa_nisa = new Mahasiswa();
 
$mahasiswa_yuni->nim = "H1101191031" ;
$mahasiswa_yuni->nama = "Yunida Salsabila" ;
$mahasiswa_yuni->tanggal_lahir = "16-10-2001" ;
$mahasiswa_yuni->jenis_kelamin = "Perempuan" ;

$mahasiswa_regita->nim = "H1101191019";
$mahasiswa_regita->nama = " Regita Dwi Cahyani" ;
$mahasiswa_regita->tanggal_lahir = "18-12-2000";
$mahasiswa_regita->jenis_kelamin = "Perempuan";

$mahasiswa_nisa->nim = "H1101191039 " ;
$mahasiswa_nisa->nama = "Fakihatunnisa Ar'rabiu W";
$mahasiswa_nisa->tanggal_lahir = "23-06-2001" ;
$mahasiswa_nisa->jenis_kelamin = "Perempuan";

$mahasiswa_yuni->tampilkanAngkatan();
$mahasiswa_yuni->tampilkanUmur()  ;
$mahasiswa_regita->tampilkanAngkatan();
$mahasiswa_regita->tampilkanUmur() ; 
$mahasiswa_nisa->tampilkanAngkatan();
$mahasiswa_nisa->tampilkanUmur()  ;
