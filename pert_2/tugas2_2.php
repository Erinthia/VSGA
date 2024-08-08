<?php
$jenis_zombie = "Buckethead Zombie";
$senjata = ""; // Variabel untuk menyimpan senjata yang digunakan

switch ($jenis_zombie) {
    case "Regular Zombie":
        $senjata = "Peashooter";
        break;
    case "Conehead Zombie":
        $senjata = "Snow Pea";
        break;
    case "Buckethead Zombie":
        $senjata = "Repeater";
        break;
    case "Newspaper Zombie":
        $senjata = "Cherry Bomb";
        break;
    case "Football Zombie":
        $senjata = "Jalapeno";
        break;
    default:
        $senjata = "tidak diketahui";
}

// Menampilkan hasil
echo "<h3>--Zombie vs Plant--</h3>";
echo "Jenis zombie: $jenis_zombie<br>";
echo "Gunakan senjata: $senjata";
?>
