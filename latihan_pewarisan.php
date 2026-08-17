<?php

class Chef {
    public $nama;

    public function memasak() {
        echo "$this->nama sedang memasak<br>";
    }
}

class ChefRestoran extends Chef {
    public function menyajikan() {
        echo "$this->nama sedang menyajikan makanan<br>";
    }
}

$chef = new ChefRestoran();
$chef->nama = "Saskia";

echo "Nama Chef: $chef->nama<br>";
$chef->memasak();
$chef->menyajikan();

?>