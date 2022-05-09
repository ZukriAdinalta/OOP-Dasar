<?php
require_once __DIR__ . "/App/init.php";

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk1);

// echo $cetakProduk->cetak();

// bikin alias pada namespace
use \App\Produk\User as ProdukUser;
use \App\Service\User as ServiceUser;

// memanggil class di dalam namespace
new ProdukUser;
echo "<br>";
new ServiceUser;