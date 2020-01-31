<?php 
    $files = scandir('images');
    $imageNames = array_slice($files, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juliy Pictures Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="heading">Pic Gallery</h1>
            <h2 class="heading">Cute pics</h2>
        </header>
        <!-- <button onclick="window.location.href = 'delete_file.php';">Del some pic</button> -->
        <a href="listFiles.php">Del some pic</a>
        <a class="upload-button" href="upload.php">Upload Image</a>

        <div class="gallery">
            <?php
                foreach ($imageNames as $imageName) {
                    echo "<img src=\"images/$imageName\" alt=\"Gallery Image\">";
                }
            ?>
        </div>
    </div>
</body>
</html>