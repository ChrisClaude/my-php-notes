<?php

    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time() + 3600);
        // 1 Hour

        header('Location: page2.php');
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Cookies</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="username" placeholder="Enter username">
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>