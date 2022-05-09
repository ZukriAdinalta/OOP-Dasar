<?php
class Game extends Produk implements infoProduk
{
  public $jumlahMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
  $harga = 0, $jumlahMain = 0 )
  {
    parent:: __construct($judul, $penulis, $penerbit, $harga);
    $this->jumlahMain = $jumlahMain;
  }

  public function getInfo(){
    // hasil => komik: Naruto | Masashi Kishimoto, Shonen Jump, Rp. 30000 - 100 Halaman.
    $str =  " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;

  }

  public function getInfoProduk()
  {
    $str =  " Game : " . $this->getInfo() .  " ~ {$this->jumlahMain} Jam.";
    return $str;
  }

}