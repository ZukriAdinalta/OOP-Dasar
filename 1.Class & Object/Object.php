<?php
/* object
1. instance yang didenfinisikan oleh class
2. banyak object dapat dibuat menggunakan satu class
3. object dibuat dgn menggunakan keyword new
*/
require_once __DIR__ . "/Class.php";

$a = new Coba();
$b = new Coba();

var_dump($a);
var_dump($b);
?>