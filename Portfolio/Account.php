<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location:login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Testing Site</title>
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
    <?php 
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM Users WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $result = $result->fetch_assoc();
        echo $result['username']; ?>
    <?php
    if(isset($_POST['logout'])){
        $_SESSION['user_id'] = null;
        header('Location:login.php');
    }
    ?>
    <button type="submit" name="logout" value="logout">LOG OUT</button>
    

</div>
</body>
</html>