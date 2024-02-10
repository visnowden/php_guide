<?php
$months = array(
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
);
$value = $_POST["value"];
if (1 <= $value and $value <= count($months)) {
    echo "This index is from " . $months[$value - 1] . ".";
} else {
    echo "This index does not exist.";
}
