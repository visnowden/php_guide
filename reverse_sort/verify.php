<?php
$value = array(
$_POST["first_value"],
$_POST["second_value"],
$_POST["third_value"]);

sort($value);
$value = array_reverse($value);
for ($i = 0; $i < count($value); $i++) {
    echo $value[$i];
    echo "<br>";
}
?>
