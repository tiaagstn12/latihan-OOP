<?php
// 1. Class adalah sebuah blueprint/template untuk membuat instance dari object
// 2. Class mendefinisikan object
// 3. Class menyimpan data(property) dan prilaku(method)

// Mmebuat class dengan nama kucing
class Kucing
{
   // Mmebuat Property
   public $warna = "coklat";
   public $jml_kaki = 4;
   public $mkn_fav = "pindang";

   // Mmebuat method dengan nama bersuara
   public function bersuara()
   {
       return "Miaww";
   }
}
// Mmebuat objek baru
// ditandai dengankeyword'new'
$kucing1 = new kucing();
$kucing1 ->warna="oren";
var_dump($kucing1);
echo "Warna kucing; $kucing1->warna<br>";
echo "Suaranya:".$kucing1->bersuara();
