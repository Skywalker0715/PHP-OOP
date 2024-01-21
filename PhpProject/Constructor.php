<?php
class produk{

    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __Construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;


    }

  public function getlabel(){
    return "$this->penerbit, $this->judul, $this->penulis, $this->harga";
  }

}

class CetakInfoProduk {
    public function cetak(produk $produk) {
        $str = "{$produk->getlabel()}";
        return $str;
   
    }

}
$produk1 = new produk("naruto", "masashi kisimoto", "Shounen jump", "300000");
$produk2 = new produk("GTA V", "SONY", "Rockstar", "2500000");

echo "Komik : ".$produk1->getlabel();
echo "<br>";
echo "Game : ".$produk2->getlabel();
echo "<br>";

$infoproduk1 = new CetakInfoProduk();
echo $infoproduk1->cetak($produk1);

?>