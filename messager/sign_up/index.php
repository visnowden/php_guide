<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
</head>

<body>
    <center>
        <div style="top: 5em; position: relative;">
            <form action="verify.php" method="post">
                <input type="text" name="user" placeholder="Enter your name">
                <br>
                <input type="password" name="pass_" placeholder="Enter your password">
                <br>
                <input type="password" name="pass" placeholder="Confirm your password">
                <br>
                <?php
                if (isset ($_POST['message'])) {
                    echo $_POST['message'];

                    unset($_POST['message']);
                } else {
                    echo 'visnowden';
                }
                echo '<br>';
                ?>
                <input type="submit" value="Sign up">
            </form>
        </div>
    </center>
</body>

</html>