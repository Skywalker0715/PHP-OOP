<?php

require_once "App/init.php";
/*
$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 300000, 100, );
$produk2 = new Game("GTA V", "Sony", "Rockstar", 2500000, 50, );

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk($produk1);
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->cetak();
*/

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

?>