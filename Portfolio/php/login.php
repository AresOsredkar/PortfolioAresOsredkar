<?php 
        
        $conn->query("USE Portfolio;");
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "SELECT * FROM Users WHERE username = '$username';";
            $result = mysqli_query($conn,$query);
            $result = $result->fetch_assoc();
            if(!$result){
                echo '<p class="error">Username password combination is wrong!</p>';
            }
            else{
                if ($password == $result['passkey']) {
                    session_start();
                    $_SESSION['user_id'] = $result['id'];
                    
                    echo '<p class="success">Congratulations, you are logged in!</p>';
                    header('Location:ForumPosts.php');
                } else {
                    echo '<p class="error">Username password combination is wrong!</p>';
                }
            }
        }
        $conn->close();
?>