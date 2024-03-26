<?php
$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "web";
$port = 3305;

$connection = new mysqli($hostname, $user, $password, $port);

if ($connection->connect_errno) {
    exit();
} else {
    $user_name = $_POST['user'];
    if ($_POST['pass_'] != $_POST['pass']) {
        header('Location: .', true, 301);
        $_POST['message'] = 'Passwords don\'t coincide!';
        echo $_POST['message'];
    } else {
        $password = $_POST['pass'];
        date_default_timezone_set('America/Sao_Paulo');
        $sql = "INSERT INTO `web`.`user`
            (`user_name`, `password`, `registration_date`, `active`)
            VALUES
            ('" . $user_name . "', '" . $password . "', '" . date("Y-m-d H:i:s") . "', true);";

        $resultado = $connection->query($sql);

        $connection->close();
        header('Location: ..', true, 301);
    }
}