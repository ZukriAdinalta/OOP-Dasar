<?php
// cara manual
// require_once __DIR__ . "/Produk/infoProduk.php";
// require_once __DIR__ . "/Produk/Produk.php";
// require_once __DIR__ . "/Produk/Komik.php";
// require_once __DIR__ . "/Produk/Game.php";
// require_once __DIR__ . "/Produk/CetakInfoProduk.php";

// cara Autoload
spl_autoload_register(function($class){
  require_once __DIR__ . '/Produk/' .$class. '.php';
});

// kesimpulan => kita bisa memangil semua class yang ada pada folder produk.