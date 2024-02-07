<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Summary </title>
    <link rel="stylesheet" href="style.css">
    <style>
       
    </style>
</head>

<body>
    
<?php
    $dir = './';
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if (is_dir($dir . $file) && $file != '.' && $file != '..' && !in_array($file, ['.git', '.vscode'])) {
                    echo '<a href="' . $file . '">' . $file . '</a><br>';
                }
            }
            closedir($dh);
        }
    }
    ?>
</body>

</html>
