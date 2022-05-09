<?php
/*
class merupakan template dari object.
static => kita bisa mengakses property dan method dlm konteks class
*/

/* Static Keyword
1. Member (property dan method) yg terikat dgn class, bukan dgn object
2. nilai static akan selalu tetap meskipun object di instansiasi berulang kali
3. membuat kode menjadi "procedural"
4. biasanya digunakan utk membuat fungsi bantuan / helper
5. atau digunakan di class-class unity pada framework 
*/

// contoh sintak static

class ContohStatic{
  // static pada property
  public static $angka =1;

  // static pada method
  public static function sayHello(){
    return "Hello - " . self::$angka++ . " Kali" ; //untuk mengambil property angka maka kita menggunakan self::
  }
}

// implementasi static
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::sayHello();
echo "<hr>";
echo ContohStatic::sayHello();


// sintak tanpa static
/*
class Contoh{
  // public $angka = 1;
  public static $angka =1 ;

  public function hello(){
    return "Hay " . self::$angka++ . " Kali <br>"; // $this->angka
  }
}

$obj = new Contoh();
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();
*/