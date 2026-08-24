<?php
class siswa 
{
    private $nama;
    private $umur;
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    { 
        return $this->nama;
    }
    public function setUmur($umur)
    {
        if ($umur>=15){
            $this->umur=$umur;
        }
    }
    public function getUmur()
    {
        return $this->umur;
    }
}
$siswa = new siswa();
$siswa->setNama("saskia");
$siswa->setUmur(17);
echo $siswa->getNama();
echo "<br>";
echo $siswa->getUmur(); 
?>