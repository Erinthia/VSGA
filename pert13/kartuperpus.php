<!-- kartuperpus.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Permohonan Kartu Perpustakaan</title>
</head>
<body>
    <h1>Formulir Permohonan Kartu Perpustakaan</h1>
    <form action="proseskartu.php" method="post" enctype="multipart/form-data">
        <label for="fullname">Nama Lengkap:</label>
        <input type="text" name="fullname" id="fullname" required>
        <br><br>

        <label for="address">Alamat:</label>
        <input type="text" name="address" id="address" required>
        <br><br>

        <label for="class">Kelas:</label>
        <select name="class" id="class" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        <br><br>

        <label for="program">Program Studi:</label>
        <select name="program" id="program" required>
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Akutansi">Akutansi</option>
            <option value="Sipil">Sipil</option>
        </select>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <label for="photo">Upload Foto:</label>
        <input type="file" name="photo" id="photo" accept="image/*" required>
        <br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
