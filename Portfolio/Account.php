<?php include('php/meta.php'); ?>
<?php
    if(!isset($_SESSION['user_id'])){
        header('Location:login.php');
        exit;
    }
?>

<body>

<div class="body">

    <?php include('php/navbar.php'); ?>
    <?php include('php/database.php'); ?>
    <?php 
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM Users WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $result = $result->fetch_assoc();
        echo $result['username']; ?>
    <?php
     if (isset($_POST['logout'])) {
        $_SESSION['user_id'] = null;
        header('Location:login.php');
    }
    ?>
    <form><button type="submit" name="logout" value="logout">LOG OUT</button><form>
    

</div>
</body>
</html>