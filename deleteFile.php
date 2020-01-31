<html>
<head>
<link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>
<body>
<?php
    $fileName = $_GET["file_name"];
    $filePath = 'images/' . $fileName;

    // Delete current file
    $isSuccess = unlink($filePath);
    // Redirect to index 
    
    if ($isSuccess) {
        header('Location: /demo_pic');
    } else {
        echo 'Cannot delete file!';
    }
?>
</body>
</html>
