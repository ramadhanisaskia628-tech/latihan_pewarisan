<?php 
class Siswa {
    public $nama;
    public $jurusan;
 
    public function __construct($nama,$jurusan) {
        $this->nama=$nama;
        $this->jurusan=$jurusan;
        
    }
    public function perkenalan() {
        echo "Halo,nama saya $this->nama dari jurusan $this->jurusan.<br>";

    }
}

$siswa1=new siswa("saskia","informatika");
$siswa1->perkenalan();

?>