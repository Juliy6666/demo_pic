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