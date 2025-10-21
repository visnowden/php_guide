<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <center>
        <form method="POST">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
            <br>
            <br>
            <label for="age">Idade</label>
            <input type="text" name="age" id="age">
            <br>
            <br>
            <input type="submit" value="Salvar">
        </form>

    </center>
    <?php

        $connection = new mysqli("localhost", "root", "", "senai_class_1");
        
        if (($_SERVER["REQUEST_METHOD"] == "POST")) {
            $name = $connection -> real_escape_string( $_POST["name"] );
            $age = $connection -> real_escape_string( $_POST["age"] );
            
            $date = date("Y-m-d");
            echo(date("Y")) - $age;

            echo($date);

            $sql = "insert into people values ('$name', '$age')";
            
            $connection -> query($sql);
        }
    ?>
</body>
</html>