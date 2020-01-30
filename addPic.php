<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add picures</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet">

</head>
<body>
    <div class="content">
        <h1>Juliy Pictures Demo Show</h1>

        <h3>Add your favorite Pictures</h3>
        <form action="postPic.php" method="post"> 
            <label for="new-pic-title">Pic Title</label>
            <input type="text" name="newPic" id="new-pic-title" placeholder="Godday">
            <input type="submit" value="Add">
        </form>
    </div>
</body>
</html>