<?php include('php/meta.php'); ?>

<body>


<div class="body">

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