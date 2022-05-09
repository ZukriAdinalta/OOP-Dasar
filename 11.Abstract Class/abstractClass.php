<?php
/* Abstrack Class
1. Sebuah kelas yang tidak dapat di instansiasi
2. Abstrack Class atau bisa di sebut kelas abstrak
3. Mendefenisikan interface untuk kelas lain yang menjadi turunannya
4. berperan sebagai kerangka dasar utk kelas turunanya
5. memiliki minimal 1 method abstrak
6. Digunakan dalam "pewarisan / inheritance" utk memaksakan implementasi method abstrak yg sama utk semua kelas turunanya
7. Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
8. Kelas abstrak boleh memiliki property / method reguler
9. Kelas abstrak boleh memiliki property / static method
*/

/* Method Abstrack
1. hanya interfacenya saja
2. implementasinya ada di kelas turunanya
 */

// Mebuat Abstrack Class
abstract class Buah // class abstract
{
  public $warna;
  abstract public function makan(); // method abstract

  public function setWarna($warna){
    $this->warna = $warna;
  }
}

class Apel extends Buah
{
   public function makan(){
    return $this->warna;
  }
}

$obj = new Apel();
$obj->warna = "Merah";
echo $obj->warna;