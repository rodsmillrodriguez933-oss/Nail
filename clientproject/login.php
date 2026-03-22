<?php
session_start()
?>

 <?php
    if (!empty($_SESSION['flash'])){
        $type = $_SESSION['flash']['type'];
        $text = $_SESSION['flash']['type'];

        echo "<div class='msg " . htmlspecialchars($type) . "'>" . htmlspecialchars($text). "</div>";

        unset($_SESSION['flash']);
    }
    ?>
<?php
        if(empty($_SESSION['user'])){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="code.php" method="POST">
    <input type="hidden" name="action" value="login">
    <h2>Login</h2>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="login">
</form>

</body>
</html>
<?php
        } else {
            header("Location: home.php");
            exit();
        }
?>
