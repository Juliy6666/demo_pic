<?php
    session_start();

    if (!isset($_SESSION['Re_pic_demo'])) {
        $_SESSION['Re_pic_demo'] = array();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet">
    <title>Re_pic_demo</title>
</head>

<body>
    
    <div class="content">
            <h1>Juliy Pictures Demo Show</h1>

            <a class="button" href="addPic.php">Add pic</a>

            <ul class="pic-list">
                <?php
                    foreach ($_SESSION['Re_pic_demo'] as $picName) {
                        echo "<li>$Re_pic_demo</li>";
                    }
                ?>
            </ul>

        </div>
    
</body>
</html>