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
        <?php
        $query = "SELECT u.username, p.UserID, p.PostDate, p.PostFile FROM Posts p JOIN Users u ON u.ID = p.UserID;";
        $conn->query("USE Portfolio;");
        $res = $conn->query($query);
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                echo "<div class='postCSS'><div class='author'>" . $row["username"] . "</div><div class='time'>". $row["PostDate"] ."</div><div class='content'>";
                $file = fopen("forumPosts/" . $row["PostFile"], "r");
                echo fread($file,"200");
                fclose($file);
                echo "</div></div><br>";
            }
          } else {
            echo "0 results";
        } 
        ?>
    </div>
    <div class="containerAc" id="accountInfo">
    <?php 
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM Users WHERE id = $id";
        $result = mysqli_query($conn,$query);
        $result = $result->fetch_assoc();
        echo $result['username']; ?>
    
    <form><button type="submit" name="logout" value="logout">LOG OUT</button></form>
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

