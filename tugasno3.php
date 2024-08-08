<?php
// Fungsi untuk menghitung nilai akhir dan status kelulusan
function cekKelulusan($nim, $nama, $nilaiQ1, $nilaiQ2, $nilaiUTS, $nilaiUAS, $nilaiProyek) {
    // Menghitung nilai akhir berdasarkan bobot
    $nilaiAkhir = ($nilaiQ1 * 0.10) + ($nilaiQ2 * 0.10) + ($nilaiUTS * 0.20) + ($nilaiUAS * 0.20) + ($nilaiProyek * 0.50);
    
    // Menentukan status kelulusan
    $statusKelulusan = ($nilaiAkhir > 60) ? "Lulus" : "Tidak Lulus";
    
    // Menampilkan hasil
    echo "<h2>--Status Kelulusan Mahasiswa--</h2>";
    echo "NIM: $nim<br>";
    echo "Nama: $nama<br>";
    echo "Nilai Q1: $nilaiQ1<br>";
    echo "Nilai Q2: $nilaiQ2<br>";
    echo "Nilai UTS: $nilaiUTS<br>";
    echo "Nilai UAS: $nilaiUAS<br>";
    echo "Nilai Proyek: $nilaiProyek<br>";
    echo "Nilai Akhir: $nilaiAkhir<br>";
    echo "Status Kelulusan: $statusKelulusan<br>";
}

// Contoh penggunaan fungsi
$nim = "123456";
$nama = "Erinthia Dinda Pratiwi";
$nilaiQ1 = 80;
$nilaiQ2 = 70;
$nilaiUTS = 75;
$nilaiUAS = 85;
$nilaiProyek = 90;

cekKelulusan($nim, $nama, $nilaiQ1, $nilaiQ2, $nilaiUTS, $nilaiUAS, $nilaiProyek);
?>
