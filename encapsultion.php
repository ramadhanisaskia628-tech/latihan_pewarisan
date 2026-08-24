<?php 
class siswa 
{
    private $nama;
 
 public function setNama($nama) 
 { 
    $this->nama = $nama;
 }
 public function getNama()
 {
    return $this->nama;
  }
 }
$siswa=new siswa(); 
$siswa->setNama("saskia");
echo $siswa->getNama();
?>
