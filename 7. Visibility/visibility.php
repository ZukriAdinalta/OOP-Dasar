<?php
/* Visibility
1. Konsep yang digunakan untuk mengatur akses dari PROPERTY dan METHOD pada sebuah objek
2. Ada 3 keyword visibility: public, protected dan private
- public -> digunakan di mana saja, bahkan di luar kelas
- protected -> hanya dapat digunakan di dalam sebuah kelas beserta turunannya
- private -> hanya dpt digunakan di dalam sebuah kelas tertentu saja
 */

// sintak visibility

class visibility {
  public $nama;
  protected $kelas;
  private $oke;
}