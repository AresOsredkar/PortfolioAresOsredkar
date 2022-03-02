<?php include('php/meta.php'); ?>

<link rel="stylesheet" href="css/tictactoe.css">
<script src="script/tictactoe.js"></script>

<body>

<div class="body">

        <!--navigation bar-->
        <div id="navPlaceholder">

        </div>
        <?php include('php/navbar.php'); ?>
    

    <div id="tictactoe" active="false">
        <h1 id="title">TICTACTOE</h1>
        <div id="instructions">You've seen a game of tictactoe before haven't you</div><br>
        <div id="board">
            <div id="TL" class="tile clickable"></div><div id="TM" class="tile clickable"></div><div id="TR" class="tile clickable"></div>
            <div id="ML" class="tile clickable"></div><div id="MM" class="tile clickable"></div><div id="MR" class="tile clickable"></div>
            <div id="BL" class="tile clickable"></div><div id="BM" class="tile clickable"></div><div id="BR" class="tile clickable"></div>
        </div>
        <div id="turn">Its X turn.</div>
        <br>
        <a id="tttRestart" href="TicTacToe.php">Restart?</a>
        
    </div>
</div>
</body>
</html>