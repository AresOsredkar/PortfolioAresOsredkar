<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location:Login.php');
        exit;
    }
?>
<?php include('php/meta.php'); ?>


<body>

<div class="body">

    <?php include('php/navbar.php'); ?>
    <?php include('php/database.php'); ?>
    
    
    

</div>
</body>
</html>