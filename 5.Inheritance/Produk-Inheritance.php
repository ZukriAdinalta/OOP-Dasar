<?php
/* Studi kasus => Menjual sebuah produk yang isinya ada komik dan game */


class Produk{
  public  $judul ,
          $penulis ,
          $penerbit,
          $harga,
          $jumlahHalaman,
          $jumlahMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
                              $harga = 0, $jumlahHalaman = 0, $jumlahMain = 0 )
  {
    $this->judul = $judul; // $this->judul => memanggil properti judul dan $judul => argumen construct
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jumlahHalaman = $jumlahHalaman;
    $this->jumlahMain = $jumlahMain;
    
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit"; 
  }

  public function getInfoProduk(){
    // hasil => komik: Naruto | Masashi Kishimoto, Shonen Jump, Rp. 30000 - 100 Halaman.
    $str =  " {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;

  }
}

class Komik extends Produk{
  public function getInfoProduk()
  {
    $str =  " Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jumlahHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk{
  public function getInfoProduk()
  {
    $str =  " Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jumlahMain} Jam.";
    return $str;
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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 0, 50);

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();