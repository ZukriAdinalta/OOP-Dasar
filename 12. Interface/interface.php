<?php
/* Interface
1. kelas murni yang sama sekali tidak memiliki implementasi
2. murni merupakan template utk kelasturunanya
3. tidak boleh memiliki property, hanya deklarasi method saja
4. semua method harus dideklarasikan dengan visibilty public
5. boleh mendeklarasikan __construct()
6. satu kelas boleh mengiplementasikan banyak interface
7. Dengan menggunakan type-hinting dpt melakukan "Dependency Injector"
8. Pada akhirnya akan mencapai Polymorphism
 */


// Mebuat class interface
interface Buah 
{
  public function makan(); 

  public function setWarna($warna);
}

interface Benda
{
  public function setUkuran($ukuran);
}

class Apel implements Buah, Benda // membuat chid class interface harus menggunakan keyword implements dan 1 child bisa memiliki lebih parentnya
{
  public $warna;
  public $ukuran;
   public function makan(){
    
  }

  public function setWarna($warna){
    $this->warna = $warna;
  }

  public function setUkuran($ukuran){
    $this->ukuran = $ukuran;
  }
}

$obj = new Apel();
$obj->warna = "merah";
$obj->ukuran = 4;
echo $obj->warna ;
echo "<br>";
echo $obj->ukuran;