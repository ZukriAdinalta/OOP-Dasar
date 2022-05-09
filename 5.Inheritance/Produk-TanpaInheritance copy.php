<?php
/* Studi kasus => Menjual sebuah produk yang isinya ada komik dan game */


class Produk{
  public  $judul ,
          $penulis ,
          $penerbit,
          $harga,
          $jumlahHalaman,
          $jumlahMain,
          $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
                              $harga = 0, $jumlahHalaman = 0, $jumlahMain = 0 , $tipe = "tipe")
  {
    $this->judul = $judul; // $this->judul => memanggil properti judul dan $judul => argumen construct
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jumlahHalaman = $jumlahHalaman;
    $this->jumlahMain = $jumlahMain;
    $this->tipe = $tipe;
    
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit"; 
  }

  public function getInfoLengkap(){
    // hasil => komik: Naruto | Masashi Kishimoto, Shonen Jump, Rp. 30000 - 100 Halaman.
    $str =  " {$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    if($this->tipe == "Komik"){
      $str .= " - {$this->jumlahHalaman} Halaman. " ;
    } else if ($this->tipe == "Game"){
      $str .= " ~ {$this->jumlahMain} Jam. " ;
  }

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


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0 , "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 0, 50, "Game" );

echo $produk1->getInfoLengkap();
echo "</br>";
echo $produk2->getInfoLengkap();