<?php
/*constant -> sebuah identifier untuk menyimpan nilai (nilainya tidak bisa di rubah)
1. define() -> tidak bisa di simpan dapa class disimpan diluar sebagai constant gobal
2. const -> sedangkan const bisa di simpan dalam class.
*/

/* define()
define("NAMA", "Zukri Adinalta"); // define(name, value)
echo NAMA;
echo "<br>"; */

/* const
const UMUR = 26;
echo UMUR; */

// contoh dlam class


class Contoh{
  // define("NAMA", "Zukri Adinalta"); // error
  const NAMA = "Zukri Adinalta";
}

// cara mengakses constant sama dengan static ->  NamaClass::Property
echo Contoh::NAMA;
echo "<hr>";

// Magic Constant
echo __LINE__; // baris pada coding sekarang yaitu baris ke 19
echo "<br>";
echo __FILE__; // menapilkan file saat ini -> C:\xampp\htdocs\11. PHP UNPAS\OOP Dasar\10.Constant\constant.php
echo "<br>";
echo __DIR__; // menapilkan direktory pada saat ini -> C:\xampp\htdocs\11. PHP UNPAS\OOP Dasar\10.Constant\
echo "<br>";

class Apa{
function coba(){
  return __FUNCTION__ . " " . __CLASS__ . " " . __METHOD__ ; //  menapilkan function saat ini, class saat ini dan Mrthod saat ini.
} 
}
$apa = new Apa();
echo $apa->coba();


/*
__TRAIT__ -> 
__NAMESPACE__ -> 

*/