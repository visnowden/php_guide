<?php
$values = array(
    $_POST["first_value"],
    $_POST["second_value"],
    $_POST["third_value"],
    $_POST["fourth_value"],
    $_POST["fifth_value"],
    $_POST["sixth_value"],
    $_POST["seventh_value"],
    $_POST["eighth_value"],
    $_POST["ninth_value"],
    $_POST["tenth_value"],
    $_POST["eleventh_value"],
    $_POST["twelfth_value"],
    $_POST["thirteenth_value"],
    $_POST["fourteenth_value"],
    $_POST["fifteenth_value"],
    $_POST["sixteenth_value"],
    $_POST["seventeenth_value"],
    $_POST["eighteenth_value"],
    $_POST["nineteenth_value"],
    $_POST["twentieth_value"]
);
$pair = $odd = 0;
for ($i = 0; $i < count($values); $i++) {
    if ($values[$i] % 2 == 0) {
        $pair += $values[$i];
    } else {
        $odd += $values[$i];
    }
}

echo "Pairs sum value: " . $pair;
echo "<br>";
echo "Odds sum value: ". $odd;
echo "<br>";
?>