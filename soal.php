<?php
class rpl2
{
    public $warna_pintu;
    public $jml_kursi;
    public $jml_meja;
    public $kipas_angin;
    public $lampu;
    
    public function menyala()
    {
        return "Untuk Membantu Menerangkan Ruangan";
    }
    public function berputar()
    {
        return "Untuk Membantu Menurunkan Suhu Ruangan ";
    }
}
$rpl1 = new rpl1();
$rpl1 ->Warnapintu="coklat";
$rpl1 ->jmlkursi= 36;
$rpl1 ->jmlmeja= 20;
$rpl1 ->jmlkipas= 2;
$rpl1 ->jmllampu= 4;



$rpl2 = new rpl2();
$rpl2 ->Warnapintu="coklat";
$rpl2 ->jmlkursi= 30;
$rpl2 ->jmlmeja= 20;
$rpl2 ->jmlkipas= 2;
$rpl2 ->jmllampu= 2;

$rpl3 = new rpl3();
$rpl3 ->Warnapintu="coklat";
$rpl3 ->jmlkursi= 28;
$rpl3 ->jmlmeja= 20;
$rpl3 ->jmlkipas= 3;
$rpl3 ->jmllampu= 3;

echo "Warna Pintu Bagian Luar Adalah Warna $rpl1->warnapintu<br>";
echo "Jumlah Kursi $rpl1->jmlkursi<br>";
echo "Jumlah Meja $rpl1->jmlmeja<br>";
echo "$rpl1->jmlkipas Kipas Angin ".$rpl1->berputar()."<br>";
echo "$rpl1->lampu Lampu ".$rpl1->menyala()."<br>";

echo "Warna Pintu Bagian Luar Adalah Warna $rpl2->warnapintu<br>";
echo "Jumlah Kursi $rpl2->jmlkursi<br>";
echo "Jumlah Meja $rpl2->jmlmeja<br>";
echo "$rpl2->jmlkipas Kipas Angin ".$rpl2->berputar()."<br>";
echo "$rpl2->lampu Lampu ".$rpl2->menyala()."<br>";

echo "Warna Pintu Bagian Luar Adalah Warna $rpl3->warnapintu<br>";
echo "Jumlah Kursi $rpl3->jmlkursi<br>";
echo "Jumlah Meja $rpl3->jmlmeja<br>";
echo "$rpl3->jml_kipas Kipas Angin ".$rpl3->berputar()."<br>";
echo "$rpl3->lampu Lampu ".$rpl3->menyala()."<br>";