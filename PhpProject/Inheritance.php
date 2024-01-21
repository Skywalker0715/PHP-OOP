<?php
class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktumain,
           $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktumain, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    public function getlabel(){
        return "$this->penerbit, $this->judul, $this->penulis, $this->harga";
    }

    public function getInfolengkap(){
        $str = "{$this->tipe} : {$this->getlabel()} ";
        if($this->tipe == "Komik") {
            $str .= "{$this->jmlHalaman} Halaman ";
        }
        else if ($this->tipe == "Game") {
            $str .= "{$this->waktumain} Jam";
        }
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->getlabel()}";
        return $str;
    }
}

$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 300000, 100, 0, "Komik");
$produk2 = new produk("GTA V", "Sony", "Rockstar", 2500000, 0, 50, "Game");

echo $produk1->getInfolengkap();
echo "<br>";
echo $produk2->getInfolengkap();
?>