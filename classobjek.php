<?php 
class minuman {
    public $nama;
    public $harga;
    public $rasa;
    public $ukuran;
    public $jenis;
    
 
    public function __construct($nama,$harga,$rasa,$ukuran,$jenis) {
        $this->nama=$nama;
        $this->harga=$harga;
        $this->rasa=$rasa;
        $this->ukuran=$ukuran;
        $this->jenis=$jenis;

        
    }
    public function info() {
        echo "nama: $this->nama<br>";
        echo "harga: Rp$this->harga<br>";
        echo "rasa: $this->rasa<br>";
        echo "ukuran:  $this->ukuran<br>";
        echo "jenis: $this->jenis<br>";

    }
}

$minuman1 = new Minuman(
    "boba",
    "15000",
    "taro",
    "medium",
    "minuman dingin"
);
   
   $minuman1->info();

?>