<?php
include '../hefut/header.php';

class persegiPanjang
{
    public $panjang;
    public $lebar;

    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    function hitungKel()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$persegi = new persegiPanjang(10, 2);
$persegi2 = new persegiPanjang(20, 2);

echo 'Luas pesegi panjang: ' . $persegi->hitungLuas();
echo '<br>Keliling pesegi panjang: ' . $persegi2->hitungKel();

include '../hefut/footer.php';
