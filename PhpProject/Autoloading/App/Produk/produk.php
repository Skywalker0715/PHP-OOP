<?php

abstract class produk{
    protected $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }
    
    public function setjudul($judul){
            
        $this->judul = $judul;
    }

    public function getjudul(){
        return $this->judul;

    }

    public function setpenulis($penulis){
       $this->penulis =$penulis;
    }

    public function getpenulis(){
        return $this->penulis;
    }

    public function setpenerbit($penerbit){
        $this->penerbit=$penerbit; 
    }

    public function getpenerbit(){
        return $this->penerbit;
    }
    
    public function setharga($harga){
        $this->harga= $harga;
    }

    public function getharga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setdiskon ($diskon) {
        $this->diskon = $diskon;

    }
    public function getDiskon() {
        return $this->diskon;
        
    }

    public function getlabel(){
        return "$this->penerbit, $this->judul, $this->penulis, $this->harga";
    }

   abstract public function getInfo();

}

?>