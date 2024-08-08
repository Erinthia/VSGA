<?php
// Mendefinisikan class Buku
class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Menampilkan informasi buku
    public function tampilkanInfo() {
        return "Buku ini berjudul: $this->judul, ditulis oleh: $this->penulis, dan diterbitkan pada tahun: $this->tahunTerbit.";
    }
}

// Mendefinisikan class Perpustakaan yang merupakan subclass dari Buku
class Perpustakaan extends Buku {
    private $daftarBuku = array();

    // Konstruktor untuk menginisialisasi perpustakaan dengan buku pertama
    public function __construct($judul, $penulis, $tahunTerbit) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->daftarBuku[] = $this; // Menambahkan buku awal ke daftar
    }

    // Menambahkan buku ke dalam koleksi
    public function tambahBuku($judul, $penulis, $tahunTerbit) {
        $this->daftarBuku[] = new Buku($judul, $penulis, $tahunTerbit);
    }

    // Menampilkan semua buku
    public function tampilkanBuku() {
        $str =  "<h1>Daftar Buku</h1><br>";
        foreach ($this->daftarBuku as $buku) {
            $str .= $buku->tampilkanInfo() . "<br>";
        }
        return $str;
    }

    // Mencari buku berdasarkan judul
    public function cariBuku($judul) {
        $str = "<h1>Buku yang dicari: $judul </h1><br>";
        foreach ($this->daftarBuku as $buku) {
            if (strtolower($buku->judul) == strtolower($judul)) {
                $str .= $buku->tampilkanInfo() . "<br>";
                return $str; // Mengembalikan hasil segera setelah menemukan buku
            }
        }
        return "Buku dengan judul '$judul' tidak ditemukan.<br>";
    }
}

// Contoh penggunaan
$perpustakaan = new Perpustakaan("Sangkuriang", "Dinda", 2006);
$perpustakaan->tambahBuku("Laskar Pelangi", "Andrea Hirata", 2005);
$perpustakaan->tambahBuku("5cm", "Donny Dhirgantoro", 2007);

// Menampilkan semua buku
echo $perpustakaan->tampilkanBuku();

// Mencari buku berdasarkan judul
echo $perpustakaan->cariBuku("Sangkuriang");
echo $perpustakaan->cariBuku("kancil");
?>