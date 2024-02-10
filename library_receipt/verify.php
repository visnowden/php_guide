<?php
$user = array("student" => 3, "teacher" => 10);
$choose = $_POST["choose"];
$book = $_POST["book"];

echo "Receipt";
echo "<br>";
echo "You are a " . ucfirst($choose) . ", so you have " . $user[$choose] . " days to give back the book.";
