<?php
/* Studi kasus => Menjual sebuah produk yang isinya ada komik dan game */

class Produk{
  public  $judul ,
          $penulis ,
          $penerbit,
          $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0)
  {
    $this->judul = $judul; // $this->judul => memanggil properti judul dan $judul => prameter construct
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit"; 
  }
}


// komik
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

// game
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);

echo "Komik " . $produk1->getLabel();
echo "</br>";
echo "Game " . $produk2->getLabel();