<?php include('php/meta.php'); ?>
<link rel="stylesheet" href="css/tictactoe.css">
<script src="script/tictactoe.js"></script>

<body>

<div class="body">

        <?php include('php/navbar.php'); ?>
        <?php include('php/database.php'); ?>
        
        
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