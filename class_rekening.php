<?php
class rekening 
{
    private $saldo = 0;
    public function tambahsaldo($jumlah)
    {
        if ($jumlah >0){
            $this->saldo +=$jumlah;
        }
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
}
$rekening=new rekening();
$rekening->tambahSaldo(1000000);
echo $rekening->getSaldo();
?>