<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Movies Library </title>
</head>
<body>
    <center>
        <div style="top: 5em; position: relative;">
            <form action="verify.php" method="post">
                <input type="text" name="title" placeholder="Enter the movie title">
                <br>
                <input type="time" name="duration" placeholder="Enter the movie duration">
                <br>
                <input type="number" name="rating" placeholder="Enter the movie  rating">
                <br>
                <textarea name="synopsis" placeholder="Enter the movie synopsis" cols="100" rows="10"></textarea>
                <br>
                <input type="date" name="launch_date" placeholder="Enter the movie lauch date">
                <br>
                <input type="text" name="actor_0" placeholder="Enter the movie main actor">
                <br>
                <input type="text" name="director" placeholder="Enter the movie director">
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