<?php
//class mobil
class Mobil {
    public $nama;
    public $merk;

    function getinfo ($a) {
        echo "Nama mobil: ".$a."<br/>";
        return "avanza"; 
    }
}

//bagian main
$mobil=new Mobil();
echo "Nama Mobil: ";
echo $mobil->nama="Avanza";
?>