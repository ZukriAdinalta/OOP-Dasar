<?php
/*Inheritance (pewarisan)
1. menciptakan hieraeki antar kelas(parent & child)
2. child class, mewrisi semua properti dan method dari parent-nya (yang visible)
3. child class, memperluas (extends) funsionalitas dr parent-nya
*/

// penulisan sintak


// class parent
class Mobil{
  // property
  public $nama, $merk, $warna,
          $kecepatanMaksimal,
          $jumlahPenumpang;


  //method
  public function tambahKecepatan(){
   
    return "Kecepatan Bertambah! ";
    
  }

}

// class child
class MobilSport extends Mobil{
  public $turbo = false;

  public function jalankanTurbo(){
    $this->turbo = true;
    return "Turbo Jalan! ";
  }
}

$mobil = new MobilSport();
echo $mobil->tambahKecepatan();
echo "</br>";
echo $mobil->jalankanTurbo();

// kesimpulan: walaupun yang di panggil class child yaitu MobilSport, tapi kita tetap bisa memanggil class parent dengan method tambahKecepatan