<?php
/* Studi kasus => Menjual sebuah produk yang isinya ada komik dan game */


class Produk{
  public  $judul ,
          $penulis ,
          $penerbit,
          $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", $harga = 0)
  {
    $this->judul = $judul; // $this->judul => memanggil properti judul dan $judul => argumen construct
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit"; 
  }
}

// object Type => digunakan sebagai prameter untuk memanggil sebuah object
class CetakInfoProduk{
  // hasil : Naruto | Masashi Kishimoto, Shonen Jump, Rp. 30000
  public function cetak(Produk $produk){
    $str = " {$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);

echo "Komik " . $produk1->getLabel();
echo "</br>";
echo "Game " . $produk2->getLabel();
echo "</br>";

// implementasi object Type
$infoCetak = new CetakInfoProduk();
echo $infoCetak->cetak($produk1);
echo "</br>";
echo $infoCetak->cetak($produk2);