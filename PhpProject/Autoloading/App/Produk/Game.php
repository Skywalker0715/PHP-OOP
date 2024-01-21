<?php

class Game extends produk implements InfoProduk {
    public $waktumain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktumain=$waktumain;
    }

    public function getInfo(){
        $str = "{$this->getlabel()} ";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : " .$this->getInfo(). " ~ {$this->waktumain} Jam ";
        return $str;
    }
}


?>