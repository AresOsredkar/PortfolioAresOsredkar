<!DOCTYPE html>
<html>
    <head>
        <title>Testing Site</title>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/tictactoe.css">
        <script src="script/script.js"></script>
        <script src="script/tictactoe.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>

<div class="body">

        <!--navigation bar-->
        <div id="navPlaceholder">

        </div>
        <?php include('navbar.php'); ?>
    
    <?php
        $servername = "localhost";
        $username = "port";
        $password = "@Port123!";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        $field1 = $mysqli->real_escape_string($_POST['znamka']);
        $field2 = $mysqli->real_escape_string($_POST['leto']);
        $field3 = $mysqli->real_escape_string($_POST['doseg']);
        $field4 = $mysqli->real_escape_string($_POST['ocena']);
        $query = "INSERT INTO BojnaLetala (Znamka, Letnica, Doseg, Ocena)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}')";

        $mysqli->query($query);
        $mysqli->close();
    ?>
    <div id="sqlForm">
        <form>
            <label>Znamka</label><input type="text" name="znamka"><br>
            <label>Letnica</label><input type="number" name="leto" min="1900" max="2022"><br>
            <label>Doseg</label><input type="number" name="doseg"><br>
            <label>Ocena</label><input type="range" name="ocena" min="0" max="5" step="1"><br>
            <input type="submit" text="Submit">
        </form>
    </div>
    <div id="database">

    </div>
</div>
</body>
</html>