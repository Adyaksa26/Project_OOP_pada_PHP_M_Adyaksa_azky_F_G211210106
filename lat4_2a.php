<?php
Class mahasiswa{
    public $nama;
    public $nim;

    function __construct($a,$b) {
        $this->nama=$a;
        $this->nim=$b;
        echo "kelas telah dibuat<br/><br/>";
    }
    function __construct($a,$b) {
    }

    function cetak() {
        echo $this->nama."<br/>".$this->nim."<br/><br/>";
    }

    function ___destruct() {
        echo "kelas telah dihancurkan";
    }
}

?>