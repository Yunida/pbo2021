<?php

namespace App;

class Chameleon  
{
    use Pack;

    public function cekNama()
    {
        echo "Nama bunglon ini adalah ".$this->name."<br>";
    }
    public function sleep()
    {
        echo "Saat ini ".$this->name." sedang tidur malam<br>";
    }
}