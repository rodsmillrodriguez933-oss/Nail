<?php
session_start()
?>
    <?php
    if (!empty($_SESSION['flash'])){
        $type = $_SESSION['flash']['type'];
        $text = $_SESSION['flash']['text'];

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
    <title>Document</title>
</head>
<body>

 <form action="code.php" method="POST">
    <input type="hidden" name="action" value="register">
    <h2>Welcome to the Application</h2>
    <h2>Register</h2>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="register"> 
</form>

</body>
</html>

already have an account? <a href="login.php">Login here</a>
<?php
        } else {
            header("Location: home.php");
            exit();
        }
    ?>