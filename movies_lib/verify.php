<?php

$hostname = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'movies';

$connection = new mysqli($hostname, $user, $password, $database);

if ($connection->connect_error) {
    exit();
} else {
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $rating = $_POST['rating'];
    $launch_date = $_POST['launch_date'];
    $actors = [
        $_POST['actor_0'], $_POST['actor_1'],
        $_POST['actor_2'], $_POST['actor_3'],
        $_POST['actor_4']
    ];
    $director = $_POST['director'];

    $sql = "INSERT INTO `movie` (`title`, `duration`, `rating`, `launch_date`, `actor_0`, `actor_1`, `actor_2`, `actor_3`, `actor_4`, `director`)
    VALUES ('$title', '$duration')";
}
