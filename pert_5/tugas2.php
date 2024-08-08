<?php
class Buku
{
    //deklarasi variable
    public $judul;
    public $penulis;
    public $tahunTerbit;
    // Konstruktor
    public function __construct($judul, $penulis, $tahunTerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }
    // Menampilkan informasi buku
    public function tampilkanInfo()
    {
        return "Buku ini berjudul: $this->judul, ditulis oleh: 
        $this->penulis, dan diterbitkan pada tahun: $this->tahunTerbit.";
    }
}
class Perpustakaan
{
    //deklarasi variable  array
    private $daftarBuku = array();
    // Menambahkan buku ke dalam daftar buku
    public function tambahBuku($judul, $penulis, $tahunTerbit)
    {
        $this->daftarBuku[] = new Buku(
            $judul,
            $penulis,
            $tahunTerbit
        );
    }
    // Menampilkan daftar buku
    public function tampilkanBuku()
    {
        $str = "<h1>Daftar Buku: </h1><br>";
        foreach ($this->daftarBuku as $buku) {
            $str .= $buku->tampilkanInfo() . "<br>";
        }
        return $str;
    }
    // Mencari buku berdasarkan judul
    public function cariBuku($judul)
    {
        $str = "<h1>Buku yang dicari: $judul </h1><br>";
        foreach ($this->daftarBuku as $buku) {
            if (strtolower($buku->judul) == strtolower($judul)) {
                $str .= $buku->tampilkanInfo() . "<br>";
            }

        }
        return "Buku dengan judul '$str' tidak ditemukan.<br>";
    }
}
echo "<h1>Perpustakaan Erin</h1>";
$perpustakaan = new Perpustakaan();
$perpustakaan->tambahBuku("Laskar Pelangi", "Andrea Hirata", 2005);
$perpustakaan->tambahBuku("Dilan 1990", "Pidi Baiq", 2014);
$perpustakaan->tambahBuku("5 CM", "Donny Dhirgantoro", 2011);
echo $perpustakaan->tampilkanBuku();
echo $perpustakaan->cariBuku("Dilan 1990");
echo $perpustakaan->cariBuku("5 cm");
echo $perpustakaan->cariBuku("si kancil");
?>