<?php
        $servername = "localhost";
        $username = "port";
        $password = "@Port123!";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        mysqli_query($conn,"USE Portfolio;")
    ?>