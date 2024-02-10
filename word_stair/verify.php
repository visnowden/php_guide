<?php
$value = $_POST["value"];
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $value . " ";
    }
    echo "<br>";
}
?>