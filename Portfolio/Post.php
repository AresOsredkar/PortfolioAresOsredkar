<?php
    session_start();
    include('php/database.php');
    if(!isset($_SESSION['user_id'])){
        header('Location:login.php');
        exit;
    }
    if (isset($_POST['create'])) {
        $query="INSERT INTO Posts (UserID,PostDate,PostFile) VALUES ('" . $_SESSION['user_id'] . "', NOW(), '" .  $_POST['postContent'] . "');";
        mysqli_query($conn,$query);   
        header('Location:ForumPosts.php');     
    }
    if (isset($_POST['logout'])) {
        unset($_SESSION['user_id']);
        $_SESSION = array();
        session_destroy();
        header('Location:login.php');
    }
    include('php/meta.php');
    ?>
<body>
<?php include('php/navbar.php'); ?>
<div class="body forumContain">  
    <?php 
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM Users WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $result = $result->fetch_assoc();
        echo $result['username'];   
    ?>
    <div class="containerAc" id="content">
        <form method="post">
            <label>Post text</label>
            <input type="textbox" name="postContent" rows=10 columns=20>
            <button type=submit name="create" value="create">CREATE</button> 
        </form>
    </div>
    <div class="containerAc" id="accountInfo">
    <?php 
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM Users WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $result = $result->fetch_assoc();
        echo $result['username']; ?>
    
    <form method="post"><button type="submit" name="logout" value="logout">LOG OUT</button></form>
    <a href="post.php"><button type="submit" name="post" value="post">POST</button></a>
    </div>

    
    

</div>
</body>
</html>

