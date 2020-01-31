<html>
<head>
<link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <div id="file_div">
    <?php
    $folder = "images/";
    if ($dir = opendir($folder)) {
        while (($file = readdir($dir)) !== false) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            echo "<p>".$file."</p>";
            echo "<form method=\"get\" action=\"deleteFile.php\">";
            echo "<input type=\"hidden\" name=\"file_name\" value=\"" . $file . "\">";
            echo "<input type=\"submit\" value=\"Delete File\">";
            echo "</form>";
        }
        closedir($dir);
    }
    ?>
    </div>
</div>
</body>
</html>