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

        if (isset($_POST['register'])) {
            $password = $_POST['password'];
                //data verification
                $username = test_input($_POST["username"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                    $nameErr = "Only letters and white space allowed";
                }
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }


            $query = "INSERT INTO Users (username,passkey,email) VALUES ('$username','$password','$email')";
            mysqli_query($conn,$query);
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $conn->close();
?>