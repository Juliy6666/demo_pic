<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="heading">Pictures Gallery</h1>
            <h3 class="heading1">Cute pictures</h3>
        </header>

        <form action="postImage.php" method="post" enctype="multipart/form-data" class="upload-image-form">
            <div>
                <label>Upload pictures: </label>
                <input type="file" name="newImage">
            </div>
        
            <div class=submitUp>
                <input type="submit" value="UPLOAD" class="upload-button">
                <a href="index.php">Galery pic</a>
            </div>
            
        </form>
    </div>
</body>
</html>