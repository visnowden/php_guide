<?php
$first_value = $_POST["first_value"];
$second_value = $_POST["second_value"];
for ($i = $first_value; $i >= $second_value; $i--) {
    echo $i;
    echo '<br>';
}
?>
