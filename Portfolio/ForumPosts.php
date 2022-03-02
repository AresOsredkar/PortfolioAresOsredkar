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
        echo $result['username']; 


        $query = "SELECT * FROM Posts;";
        $conn->query("USE Portfolio;");
        $res = $conn->query($query);
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                echo "<div class='post'><div class='author'>" . $row["UserID"] . "</div><div class='time'>". $row["PostDate"] ."</div><div class='content'>";
                $file = fopen("forumPosts/" . $row["PostFile"] . ".txt", "r");
                echo fread($file,filesize("forumPosts/" . $row["PostFile"] . ".txt"));
                fclose($file);
                echo "</div></div>";
            }
          } else {
            echo "0 results";
        } 
    ?>

    
    

</div>
</body>
</html>

/* CREATE TABLE Posts{
    PostID int PRIMARY KEY AUTO_INCREMENT,
    UserID int NOT NULL,
    PostDate DATETIME NOT NULL,
    PostFile VARCHAR(20) NOT NULL
    FOREIGN KEY (UserID) REFERENCES Users(id)
};
 */