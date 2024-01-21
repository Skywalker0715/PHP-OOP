<?php

class komik extends produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman; 
    }

    public function getInfo(){
        $str = "{$this->getlabel()} ";
        return $str;
    }

    public function getInfoProduk(){
        $str = "KOMIK :" .$this->getInfo(). "- {$this->jmlHalaman} Halaman ";
        return $str;
    }
}

?>