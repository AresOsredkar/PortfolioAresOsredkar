<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Biography</title>
        <?php include('php/meta.php'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>


<div class="body">

    <!--navigation bar-->
    <div id="navPlaceholder">

    </div>
    <?php include('php/navbar.php'); ?>
    <?php include('php/database.php'); ?>
    <?php include('php/login.php'); ?>

    <div class="mainPage loginForm">
        <form method="post" name="signin-form" action="">
            <label>Username</label><input type="text" name="username" required><br><br>
            <label>Password</label><input type="password" name="password" required><br><br>
            <button type="submit" name="login" value="login">Log IN</button>
        </form>
        <a href="Register.php" style="color:blue;text_decoration:underline;">Don't have an account yet?</a>
    </div>

</div>
</body>
</html>