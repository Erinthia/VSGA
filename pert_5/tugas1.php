<?php
class Segitiga{
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    //hitung luas segitiga
    public function luas()
    {
        return "Luas segitiga: " . ($this->alas * $this->tinggi) / 2;
    }
    //hitung keliling segitiga
    public function keliling($sisi1, $sisi2)
    {
        return "Keliling segitiga: " . ($this->alas + $sisi1 + $sisi2);
    }
    //menampilkan informasi segitiga
    public function tampilkanInfo()
    {
        return "Segitiga ini memiliki alas: $this->alas dan tinggi: $this->tinggi.";
    }
}
$segitiga = new Segitiga(5,10);
echo $segitiga->tampilkanInfo() . "<br>";
echo $segitiga->luas() . "<br>";
echo $segitiga->keliling(10, 20) . "<br>";
?>