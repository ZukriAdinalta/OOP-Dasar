<?php
/* Studi kasus => Menjual sebuah produk yang isinya ada komik dan game */


class Produk{
  private   $judul ,
            $penulis ,
            $penerbit, 
            $harga,
            $diskon = 0;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
                              $harga = 0)
  {
    $this->judul = $judul; 
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    
  }

  //  Setter Dan Getter
  public function setJudul($judul){
    /* menggunakan setter dan getter bisa melakukan validasi kesalahan
    if(!is_string($judul)){ // jika prameter judul bukan string maka errornya "Judul harus string"
      throw new Exception("Judul harus string");
    }*/
      $this->judul = $judul;
  }

  public function getJudul(){
    return $this->judul;
  }

  public function setPenulis($penulis){
    $this->penulis = $penulis;
  }

  public function getPenulis(){
    return $this->penulis;
  }

  public function setPenerbit($penerbit){
    $this->penerbit = $penerbit;
  }

  public function getPenerbit(){
    return $this->penerbit;
  }

  public function setHarga($harga){
    $this->harga = $harga;
  }
  
  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }

  public function getDiskon(){
    return $this->diskon;
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit"; 
  }

  public function getInfoProduk(){
    // hasil => komik: Naruto | Masashi Kishimoto, Shonen Jump, Rp. 30000 - 100 Halaman.
    $str =  " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;

  }
}

// child class komik
class Komik extends Produk{
  public $jumlahHalaman; 

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
  $harga = 0, $jumlahHalaman = 0)
  {
    parent::__construct($judul , $penulis , $penerbit, $harga);
    $this->jumlahHalaman = $jumlahHalaman;
  }
  
  public function getInfoProduk()
  {
    $str =  " Komik : "  . parent::getInfoProduk().   " - {$this->jumlahHalaman} Halaman.";
    return $str;
  }
}

// child class game
class Game extends Produk{
  public $jumlahMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
  $harga = 0, $jumlahMain = 0 )
  {
    parent:: __construct($judul, $penulis, $penerbit, $harga);
    $this->jumlahMain = $jumlahMain;
  }

  public function getInfoProduk()
  {
    $str =  " Game : " . parent::getInfoProduk() .  " ~ {$this->jumlahMain} Jam.";
    return $str;
  }

}


class CetakInfoProduk{
  public function cetak(Produk $produk){
    $str = " {$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 50);

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50); 
echo $produk2->getHarga(); 

echo "<hr>";

// setter dan getter
$produk1->setPenulis(200);
echo $produk1->getPenulis();