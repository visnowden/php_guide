<?php
    require_once("assets/global.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION["connected"]) and $_SESSION["connected"] == true) {
        header("location: register/");
    }


    if (($_SERVER["REQUEST_METHOD"] == "POST")) {
        $conn = new mysqli($hostname, $username, $password, $database);
        
        $email = $conn->real_escape_string($_POST["email"]);
        $password = $conn->real_escape_string($_POST["password"]);
        
        $sql = "select 1 from professor where email = '$email' and password = '$password'";

        $response = $conn->query($sql);

        if ($response->num_rows == 1) {
            $_SESSION["connected"] = true;
            
        } //else {
            //die("Valores incorretos inseridos.");
        //}
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
</head>
<body>
    <form method="POST">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>
