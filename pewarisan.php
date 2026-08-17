<?php 
 
 class kendaraan {
    public $merk;

    public function nyalakanMesin(){
        echo "mesin dinyalakan<br>";
    }
 }

 class mobil extends kendaraan {
    public function klakson(){
        echo "klakson dibunyikan<br>";
    }
 }

 $mobil= new mobil();
 $mobil->merk="toyota";
 echo "merk: $mobil->merk<br>";
 $mobil->nyalakanMesin();
 $mobil->klakson();
 
 ?>