<?php
$target_dir = "uploads/"; // Direktori tempat file akan diunggah
$target_file = $target_dir .
basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Periksa apakah file adalah gambar sebenarnya atau bukan
if(isset($_POST["submit"])) {
    $check =
getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " .
$check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Periksa apakah file sudah ada
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
 
// Batasi ukuran file (misalnya, maksimum 5MB)
if
($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
 
// Batasi jenis file yang diizinkan (misalnya, hanya JPG, PNG, dan GIF)
if($fileType != "jpg"
&& $fileType != "png" && $fileType !=
"jpeg" && $fileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are
allowed.";
    $uploadOk = 0;
}