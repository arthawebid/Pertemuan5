<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    
    <form method="POST" action="terimafile01.php" enctype="multipart/form-data">
        Deskripsi:<br>
        <input type="text" name="deskripsi"><br>
        <div>
            Upload File:<br>
            <input type="file" name="txFile">
        </div>

        <div>
            <button type="submit">Kirim File</button>
        </div>

    </form>

</body>
</html>