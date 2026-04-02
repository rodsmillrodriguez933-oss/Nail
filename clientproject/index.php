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
    
        if(empty($_SESSION['user'])){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/style/main_style.css">
    <link rel="stylesheet" href="resources/style/style.css">
    <title>Cha's Nails</title>
</head>
<body>
<div class="reg">
    <form action="code.php" method="POST">
        <input type="hidden" name="action" value="register">
        <h2 id="welcome">
            <img class="banner-logo" src="resources/style/photos/logo.jpg" alt="Brand Logo">
            Welcome to Polished By Cha
        </h2>
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <button type="submit" name="submit">Register</button> 
    </form>
</div>

Already have an account? <a href="login.php">Login here!</a>
</body>
</html>


<?php
        } else {
             

    ?>
   <div class="header">
        <h1>Project</h1>
        <form action="code.php" method="POST">
            <input type="hidden" name="action" value="logout">
            <button type="submit">Logout</button>
        </form>
    </div>  
    <div><a href="crud/table/table.php"><button>View scheduling</button></a></div>
    <div><a href="features/coolstuff/search.php"><button>Search</button></a></div>
    <div><a href="features/coolstuff/salesreport.php"><button>Sales report</button></a></div>


    
    <form action="code.php" method="POST">
         <input type="hidden" name="action" value="users">
            <button type="submit">users</button>
    </form>
<?php   
        }
       ?>
    </body>
</html>