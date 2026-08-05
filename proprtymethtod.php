<?php
class mobil {
    public $merk;
    public $warna;
}
 
$mobil = new Mobil();
$mobil->merk="Toyota";
$mobil->warna="merah";

echo "merk  mobil: $mobil->merk<br>";
echo "warna mobil: $mobil->warna<br>";

?>