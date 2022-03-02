<?php include('php/meta.php'); ?>

<body>

<div class="body">

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