<?php
$user = array("sex" => "feminine", "max_age" => 24);
$sex = strtolower($_POST["sex"]);
$age = $_POST["age"];
if (strpos($user["sex"], $sex) === 0 and $age <= $user["max_age"]) {
    echo "ACCEPTED";
} else {
    echo "NOT ACCEPTED";
}
