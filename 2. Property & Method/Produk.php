<?php
/* Studi kasus => Menjual sebuah produk yang isinya ada komik dan game */



class Produk{
  // property
  public  $judul = "judul",
          $penulis = "penulis",
          $penerbit = "penerbit",
          $harga = 0;

  // method
  public function sayHello(){
    return "Hello Word";
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit"; // $this digunakan untuk mengabil property yang ada di dlm class yg sama
  }

}

/*
$produk = new Produk();
$produk->judul = "Narto"; // menimpa nilai property judul menjadi naruto
var_dump($produk);

$produk1 = new Produk();
$produk1->tambahBaru = "hahahah"; // hati2 karena kita bisa nambahkan properti baru tanpa harus bikin property variabel
var_dump($produk1);
*/

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// var_dump($produk3);
echo "Komik : $produk3->penulis,  $produk3->penerbit";
echo "</br>";
// memanggil method
echo $produk3->sayHello();
echo "</br>";
echo "Komik " . $produk3->getLabel();
echo "</br>";
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;
echo "Game " . $produk4->getLabel();