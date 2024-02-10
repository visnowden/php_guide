<?php
$value_1 = $_POST["first_value"];
$value_2 = $_POST["second_value"];
$value_3 = $_POST["third_value"];
if ($value_1 + $value_2 > $value_3 and $value_2 + $value_3 > $value_1 and $value_3 + $value_1 > $value_2) {
    if ($value_1 == $value_2 and $value_2 == $value_3) {
        echo 'It\'s a Equilateral triangle.';
    } elseif ($value_1 == $value_2 or $value_2 == $value_3 or $value_3 == $value_1) {
        echo 'It\'s a Isosceles triangle.';
    } else {
        echo 'It\'s a Escalene triangle.';
    }
} else {
    echo 'This cannot be a triangle.';
}