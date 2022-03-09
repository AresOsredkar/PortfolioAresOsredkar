<?php
    
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location:login.php');
        exit;
    }
?>
<?php include('php/meta.php'); ?>


<body>
<?php include('php/navbar.php'); ?>
<div class="body forumContain">

    
    <?php include('php/database.php'); ?>
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
            <?php
            if (isset($_POST['create'])) {
                $filename = date("Y-m-d") . "-" . date("H:i:s") . $_SESSION['user_id'] . ".txt";
                $file = fopen(getenv("DOCUMENT_ROOT") . "/forumPosts/" . $filename,"w+") or die ("Can't open");
                $content = $_POST['postContent'];
                fwrite($file,$content);
                fclose($file);
                $query="INSERT INTO Posts (UserID,PostDate,PostFile) VALUES (" . $_SESSION['user_id'] . ", NOW(), " .  $filename . ");";
                header('Location:ForumPosts.php');
            }
            ?>
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
    <?php
     if (isset($_POST['logout'])) {
        unset($_SESSION['user_id']);
        $_SESSION = array();
        session_destroy();
        header('Location:login.php');
    }
    ?>
    </div>

    
    

</div>
</body>
</html>

