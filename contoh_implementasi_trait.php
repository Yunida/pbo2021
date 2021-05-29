<?php

require_once('vendor/autoload.php');

use App\Chameleon;

$bung = new Chameleon();
$bung->name = 'ais';

$bung->cekNama();
$bung->camouflage();
$bung->climb();
$bung->sleep();