<?php
/* Studi kasus => Menjual sebuah produk yang isinya ada komik dan game */


class Produk{
  public  $judul ,
          $penulis ,
          $penerbit;
  protected  $diskon = 0;
  private  $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
                              $harga = 0)
  {
    $this->judul = $judul; // $this->judul => memanggil properti judul dan $judul => argumen construct
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    
  }

  // private -> hanya dpt digunakan di dalam sebuah kelas tertentu saja
  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
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
  public $jumlahHalaman; // membuat variabel baru yang di butuhkan di class komik

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit  = "penerbit", 
  $harga = 0, $jumlahHalaman = 0)
  {
    // parent::__construct => memanggil method yang ada pada class parent
    parent::__construct($judul , $penulis , $penerbit, $harga);
    $this->jumlahHalaman = $jumlahHalaman;
  }
  
  public function getInfoProduk()
  {
    //parent::getInfoProduk() => memanggil method yang ada pada class parent
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
/* protected -> hanya dapat digunakan di dalam sebuah kelas beserta turunannya
  public function getHarga(){
    return $this->harga;
  }
*/

public function setDiskon($diskon){
  $this->diskon = $diskon;
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


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 50);

echo $produk1->getInfoProduk();
echo "</br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// jadi kalau kita menggunakan publik bisa merubah atau manipulasi isi variable
// sedangkan protected tdk bisa di rubah -> Uncaught Error: Cannot access protected property

$produk2->setDiskon(50); // diskon 50%
echo $produk2->getHarga(); // utk memanggil protected kita harus bikin method tersendiri.