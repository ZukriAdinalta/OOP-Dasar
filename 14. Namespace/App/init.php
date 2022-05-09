<?php
// cara manual
// require_once __DIR__ . "/Produk/infoProduk.php";
// require_once __DIR__ . "/Produk/Produk.php";
// require_once __DIR__ . "/Produk/Komik.php";
// require_once __DIR__ . "/Produk/Game.php";
// require_once __DIR__ . "/Produk/CetakInfoProduk.php";
// require_once __DIR__ . "/Produk/User.php";
// require_once __DIR__ . "/Service/User.php";

// cara Autoload => kita bisa memangil semua class yang ada pada folder produk.
spl_autoload_register(function($class){
  $class = explode('\\', $class); // App\Produk\User menjadi array = ["App", "Produk", "User"]
  $class = end($class); // mengambill elemen terakhir dari array.
  require_once __DIR__ . '/Produk/' .$class. '.php';
});

spl_autoload_register(function($class){
  $class = explode('\\', $class); // App\Produk\User menjadi array = ["App", "Produk", "User"]
  $class = end($class); // mengambill elemen terakhir dari array.
  require_once __DIR__ . '/Service/' .$class. '.php';
});