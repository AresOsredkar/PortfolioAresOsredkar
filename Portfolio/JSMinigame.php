<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Testing Site</title>
        <?php include('php/meta.php'); ?>
        <link rel="stylesheet" href="css/minigame.css">
        <script src="script/mainMenu.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>

<div class="body">
        <!--navigation bar-->
        <div id="navPlaceholder">

        </div>
        <?php include('php/navbar.php'); ?>
    

    <div id="menuContainer" active="false">
        <a href="game.html" class="start">Start Game</a>
        <!--routes into subpage for the fullscreen game-->
    </div>
</div>
</body>
</html>