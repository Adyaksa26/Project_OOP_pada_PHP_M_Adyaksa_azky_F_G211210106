<?php

class mahasiswa{
    public $nama="Mohamad adyaksa azky filoshofi ";
    public $nim="G.211.21.0106";

    function __construct(){ }

    function setNama ($a) {
        $this->nama=$a;
    }

    function setNim($b) {
        $this->nim=$b;
    }

    function getNama () {
        return $this->nama;
    }

    function getNim () {
        return $this->nim;
    }

    function destruct () { }
}

?>