<!DOCTYPE html>
<html>
    <head>
        <title>Biography</title>
        <?php include('php/meta.php'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>


<div class="body">

    <!--navigation bar-->
    <div id="navPlaceholder">

    </div>
    <?php include('php/navbar.php'); ?>
    <?php include('php/database.php'); ?>
    <?php 
        $field1 = $mysqli->real_escape_string($_POST['znamka']);
        $field2 = $mysqli->real_escape_string($_POST['leto']);
        $field3 = $mysqli->real_escape_string($_POST['doseg']);
        $field4 = $mysqli->real_escape_string($_POST['ocena']);
        $query = "INSERT INTO BojnaLetala (Znamka, Letnica, Doseg, Ocena)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}')";

        $mysqli->query($query);
        $mysqli->close();
    ?>

    <div class="mainPage loginForm">
        <form>
            <label>Username</label><input type="text"><br><br>
            <label>Password</label><input type="password"><br><br>
            <input type="submit" value="LOG IN">
        </form>
    </div>

</div>
</body>
</html>