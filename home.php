<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <div class="hello">

        <?php

        if (isset($_COOKIE['username'])) {
            echo '<p>Welcome Ya ' . $_COOKIE['username'] . '.' . '<br>' . 'You Are Inside The Website.</p>';
            echo '<a href="logout.php">logout</a>';
        } else {
            header('LOCATION: signin.html');
        }
        ?>

    </div>

</body>

</html>