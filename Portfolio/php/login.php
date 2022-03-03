<?php 
        $query = "SELECT * FROM Users;";
        $conn->query("USE Portfolio;");
        $res = $conn->query($query);
        if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . " - password: " .$row["passkey"]. " - email: " .$row["email"]. "<br>";
            }
          } else {
            echo "0 results";
        }     



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
                    header('Location:Account.php');
                } else {
                    echo '<p class="error">Username password combination is wrong!</p>';
                }
            }
        }
        $conn->close();
?>