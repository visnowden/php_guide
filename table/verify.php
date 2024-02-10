<?php
$value = $_POST["value"];
for ($i = 0; $i <= 10; $i++) {
    echo $value.' x '. $i.' = '.$value*$i;
    echo '<br>';
}
?>
