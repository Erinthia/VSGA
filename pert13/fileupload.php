<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="upload_file.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Choose file to upload:</label>
            <input type="file" name="fileToUpload" name="fileToUpload" required>
            <br><br>
            <input type="submit" value="Upload File">
    </body>
</html>