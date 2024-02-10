<?php
$value = $_POST["value"];
if (250 % 10 == 0) {
    echo "$value It is divisible by 10, by 5 and 2.";
} elseif (250 % 5 == 0 and 250 % 2 == 0) {
    echo "$value It is divisible only by 5 and 2.";
} elseif (250 % 5 == 0) {
    echo "$value It is divisible only by 10, by 5";
} else {
    echo "$value It is divisible only by 2.";
}
