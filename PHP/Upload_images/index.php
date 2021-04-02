<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Test image</title>
</head>

<body>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
        <input type="file" name="image">
        <input type="submit">
    </form>

    
</body>
</html>

