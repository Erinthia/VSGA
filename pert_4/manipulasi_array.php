<?php
$siswa = array("Oliver", "Justin", "Fiona", "Pullman", "John");
// Menghitung jumlah elemen array
echo "Jumlah siswa: " . count($siswa) . "<br>";
// Menambah elemen ke array
array_push($siswa, "Brown");
echo "Siswa setelah ditambah: " . implode(", ", $siswa) . "<br>";
// Menghapus elemen dari array
array_pop($siswa);
echo "Siswa setelah dihapus: " . implode(", ", $siswa) . "<br>";
// Mengurutkan array
sort($siswa);
echo "Siswa setelah diurutkan asc: " . implode(", ", $siswa) . "<br>";
rsort($siswa);
echo "Siswa setelah diurutkan dsc: " . implode(", ", $siswa) . "<br>";
// Menambah elemen ke array
array_push($siswa, "Oliver");
echo "Siswa setelah ditambah: " . implode(", ", $siswa) . "<br>";
//Menhapus nilai duplikat dari array
$siswa = array_unique($siswa);
echo "Siswa setelah dihapus duplikat: " . implode(", ", $siswa) . "<br>";
//Mengambil baian dari array
$siswa = array_slice($siswa, 1, 3);
echo "Siswa setelah diambil bagian: " . implode(", ", $siswa) . "<br>";
//Menghapus bagian dari array dan menggantinya dengan elemen baru
array_splice($siswa, 1, 2, ["Michael", "Jane"]);
echo "Siswa setelah dihapus bagian dan diganti: " . implode(", ", $siswa) . "<br>";
//Mencari nilai dalam array dan mengembalikan kunci atau indeks dari nilai tersebut
$index = array_search("Michael", $siswa);
echo "Index Michael: " . $index . "<br>";
//Membelik urutan elemen dalam array
$siswa = array_reverse($siswa);
echo "Siswa setelah dibalik: " . implode(", ", $siswa) . "<br>";
//Memeriksa apakah suatu nilai ada di dalam array
if (in_array("Michael", $siswa)) {
    echo "Michael ada di dalam array<br>";
} else {
    echo "Michael tidak ada di dalam array";
}
//Menambahkan array baru bernama array mahasiswa
$mahasiswa = array("John Doe", "Jane Smith", "Michael Brown");
//Menggabungkan array siswa dan mahasiswa
$gabung = array_merge($siswa, $mahasiswa);
echo "Array gabungan: " . implode(", ", $gabung) . "<br>";

?>