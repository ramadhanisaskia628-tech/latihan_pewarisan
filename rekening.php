<?php
class RekeningBank
{
    private $namaPemilik;
    private $saldo;

    public function setNamaPemilik($namaPemilik)
    {
        $this->namaPemilik = $namaPemilik;
    }

    public function getNamaPemilik()
    {
        return $this->namaPemilik;
    }

    public function setSaldo($saldo)
    {
        if ($saldo >= 0) {
            $this->saldo = $saldo; 
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

$rekening = new RekeningBank();

$rekening->setNamaPemilik("Saskia");
$rekening->setSaldo(500000);

echo "Nama Pemilik: " . $rekening->getNamaPemilik();
echo "<br>";
echo "Saldo: Rp " . $rekening->getSaldo();
?>