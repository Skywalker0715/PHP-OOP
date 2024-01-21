<?php
class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktumain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktumain,){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktumain = $waktumain;
        
    }

    public function getlabel(){
        return "$this->penerbit, $this->judul, $this->penulis, $this->harga";
    }

    public function getInfoProduk(){
        $str = "{$this->getlabel()} ";
        return $str;
    }
}

class komik extends produk {
    public function getInfoProduk(){
        $str = "KOMIK : {$this->getlabel()} - {$this->jmlHalaman} Halaman ";
        return $str;
    }
}

class Game extends produk {
    public function getInfoProduk(){
        $str = "Game : {$this->getlabel()} ~ {$this->waktumain} Jam ";
        return $str;
    }
}


class CetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->getlabel()}";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 300000, 100, 0,);
$produk2 = new Game("GTA V", "Sony", "Rockstar", 2500000, 0, 50, );

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>