<?php
class produk {

    public $judul,
           $penulis,
           $penerbit,
           $harga;

  public function getlabel(){
    return "$this->penerbit, $this->judul, $this->penulis, $this->harga";
  }

}


$produk1->judul = "naruto";
$produk1->penulis = "Masashi Kisimoto";
$produk1->penerbit = "Shounen jump";
$produk1->harga = "300000";


$produk2->judul = "GTA SAN ANDREAS";
$produk2->penulis ="Rocktar Games";
$produk2->penerbit= "Play Station 2";
$produk2->harga= "15000000";

echo "Komik : ".$produk1->getlabel();
echo "<br>";
echo "Game : ".$produk2->getlabel();

?>