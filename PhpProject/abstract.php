<?php
abstract class produk{
    private $judul,
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

    abstract public function getInfoProduk();

    public function getInfo(){
        $str = "{$this->getlabel()} ";
        return $str;
    }
}

class komik extends produk {
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman; 
    }

    public function getInfoProduk(){
        $str = "KOMIK :" .$this->getInfo(). "- {$this->jmlHalaman} Halaman ";
        return $str;
    }
}

class Game extends produk {
    public $waktumain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktumain=$waktumain;

        
    }

    public function getInfoProduk(){
        $str = "Game : " .$this->getInfo(). " ~ {$this->waktumain} Jam ";
        return $str;
    }
}


class CetakInfoProduk {
    public $daftarproduk = [];

    public function tambahProduk(produk $produk){
        $this->daftarproduk[] = $produk;

    }
    public function cetak() {
        $str = "DAFTAR PRODUK : <br> ";
        
        foreach($this->daftarproduk as $p){
            $str .= "- {$p->getInfoProduk()} <br> ";
        }
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 300000, 100, );
$produk2 = new Game("GTA V", "Sony", "Rockstar", 2500000, 50, );

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->cetak();



?>