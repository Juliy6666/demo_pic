<?php
 $tempName = $_FILES['newImage']['tmp_name'];
 $filePathName = 'images/' . $_FILES['newImage']['name'];

 $success = move_uploaded_file($tempName, $filePathName);

 if ($success) {
    header('Location: /demo_pic');
 }
 else {
     echo 'Error with upload!';
 }

?>