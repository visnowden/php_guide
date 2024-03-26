<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Summary</title>
</head>

<body>
    <!-- <div class="main">
        <p>division</p>
        <p>login</p>
        <p>regressief</p>
        <p>sum</p>
</div> -->
    <div class="titles">
        <div class="title">
            <h1 class="pink_style">Portifolio</h1>
            <h3 class="white_style">PHP</h3>
        </div>
        <br>
        <br>
        <div class="title">
            <h5 class="acqua_style">Visnowden</h5>
        </div>
    </div>
    <!-- <br>
    <br>
    <hr>
    <br>
    <br>
    <div class="activities">
            <h1>division</h1>
            <h1>login</h1>
            <h1>regressief</h1>
            <h1>sum</h1>
            </div>
        -->
    <br>
    <br>
    <div class="activities">
        <?php
        $dir = './';
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if (is_dir($dir . $file) && $file != '.' && $file != '..' && !in_array($file, ['.git', '.vscode'])) {
                        echo '<a href="' . $file . '">' . str_replace("_", " ", ucfirst($file)) . '</a>';
                    }
                }
                closedir($dh);
            }
        }
        ?>
    </div>
</body>

</html>
