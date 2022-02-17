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
    <?php include('php/register.php'); ?>

    <div class="mainPage registerForm">
        <form method="post" name="register-form" action="">
            <label>Username</label><input type="text" name="username" required><br><br>
            <label>Password</label><input type="password" name="password" required><br><br>
            <label>Email</label><input type="password" name="email"><br><br>
            <button type="submit" name="register" value="register">REGISTER</button>
        </form>
    </div>

</div>
</body>
</html>