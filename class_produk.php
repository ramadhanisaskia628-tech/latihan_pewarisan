<?php
class Produk
{
    private $nama;
    private $harga;

    public function setNama($nama)
    {
        $this->nama=$nama;
    }
    public function setHarga($harga)
    {
        if ($harga>0){
            $this->harga=$harga;
        }
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getHarga()
    {
        return $this->harga;
    }
}
$produk= new Produk();
$produk->setNama("Laptop");
$produk->setHarga(7500000);

echo "Nama:" . $produk->getNama();
echo "<br>";
echo "Harga: Rp" . $produk->getHarga();

?>